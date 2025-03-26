<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/tinymce/tinymce.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
    });
</script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('js/theme.min.js')}}"></script>

<script src="{{asset('libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('js/vendors/tnsSlider.js')}}"></script>
<script src="{{asset('libs/glightbox/dist/js/glightbox.min.js')}}"></script>
<script src="{{asset('js/vendors/glight.js')}}"></script>
