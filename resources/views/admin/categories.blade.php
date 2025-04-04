@extends('layouts.admin')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Categories of courses</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.quizzes') }}">Quizzez</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Category Quizzes</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCategoriesModal" id="addCategoryBtn">Add new category</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="card mb-4">
                    <div class="card-header border-bottom-0">
                        <form class="d-flex align-items-center" action="{{ route('admin.categories') }}" method="GET">
                            <span class="position-absolute ps-3 search-icon">
                                <i class="fa fa-search"></i>
                            </span>
                            <input type="search" class="form-control ps-6" name="search" value="{{ request('search') }}" placeholder="Search..">
                        </form>
                    </div>
                    <div class="table-responsive border-0 overflow-y-hidden">
                        <table class="table mb-0 text-nowrap table-centered table-hover table-with-checkbox">
                            <thead class="table-light">
                            <tr>
                                <th>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Quizzes</th>
                                <th>Created</th>
                                <th>Updated</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryCheck{{ $category->id }}">
                                            <label class="form-check-label" for="categoryCheck{{ $category->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-inherit">
                                            <h5 class="mb-0 text-primary-hover">{{ $category->name }}</h5>
                                        </a>
                                    </td>
                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->quizzes()->count() }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td>{{ $category->updated_at }}</td>
                                    <td>
                                        <span class="badge {{ $category->is_active ? 'bg-success' : 'bg-danger' }}">
                                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="dropdown dropstart">
                                            <a class="btn-icon btn btn-ghost rounded-circle" href="#" role="button"
                                               id="categoryDropdown{{ $category->id }}" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                               aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis" aria-hidden="true" style="font-size: 22px"></i>
                                            </a>
                                            <span class="dropdown-menu" aria-labelledby="categoryDropdown{{ $category->id }}">
                                                <span class="dropdown-header">Action</span>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#newCategoriesModal" href="#"
                                                   data-id="{{ $category->id }}"
                                                   data-name="{{ $category->name }}"
                                                   data-slug="{{ $category->slug }}"
                                                   data-status="{{ $category->is_active }}">
                                                    <i class="fe fe-edit dropdown-item-icon"></i> Edit
                                                </a>
                                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        <i class="fe fe-trash dropdown-item-icon"></i> Delete
                                                    </button>
                                                </form>
                                            </span>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="newCategoriesModal" tabindex="-1" aria-labelledby="newCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="newCategoryModalLabel">Створити нову категорію</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="categoryForm" action="{{ route('admin.categories.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Назва <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" required>
                                @error('slug')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Активна</label>
                                <div class="form-check form-switch">
                                    <input type="checkbox" class="form-check-input" name="status" id="status">
                                </div>
                            </div>

                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary" id="submitButton">Add New Category</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelectorAll('.dropdown-item[data-id]').forEach(item => {
            item.addEventListener('click', function () {
                const categoryId = this.getAttribute('data-id');
                const categoryName = this.getAttribute('data-name');
                const categorySlug = this.getAttribute('data-slug');
                const categoryStatus = this.getAttribute('data-status') === '1';
                document.getElementById('name').value = categoryName;
                document.getElementById('slug').value = categorySlug;
                document.getElementById('status').checked = categoryStatus;

                const formAction = `{{ url('admin/categories') }}/${categoryId}`;
                document.getElementById('categoryForm').action = formAction;
                document.getElementById('submitButton').innerText = 'Update category';
            });
        });

        document.getElementById('addCategoryBtn').addEventListener('click', function () {
            document.getElementById('categoryForm').reset();
            document.getElementById('submitButton').innerText = 'Add new category';
            document.getElementById('categoryForm').action = '{{ route('admin.categories.store') }}';
        });
    </script>
@endsection
