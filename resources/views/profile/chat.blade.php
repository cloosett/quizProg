@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')
    <div class="db-content" style="padding: 0px">
        <section class="container-fluid px-0">
            <!-- row -->
            <div class="row g-0">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- chat list -->
                    <div class="chat-body w-100 vh-100 simplebar-scrollable-y" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                         aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <div class="bg-white border-top border-bottom px-4 py-3 sticky-top">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <!-- media -->
                                                    <div class="d-flex align-items-center">
                                                        <a href="#" class="me-2 d-xl-none d-block" data-close=""><i
                                                                class="fe fe-arrow-left"></i></a>
                                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                                            <img src="../../assets/images/avatar/avatar-4.jpg" alt=""
                                                                 class="rounded-circle">
                                                        </div>
                                                        <!-- media body -->
                                                        <div class="ms-2">
                                                            <h4 class="mb-0">Sharad Mishra</h4>
                                                            <p class="mb-0">Online</p>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="#" class="me-3 text-link texttooltip"
                                                           data-template="phone">
                                                            <i class="fe fe-phone-call fs-3"></i>
                                                            <!-- text -->
                                                            <div id="phone" class="d-none">
                                                                <span>Voice Call</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="me-3 text-link texttooltip"
                                                           data-template="video">
                                                            <i class="fe fe-video fs-3"></i>
                                                            <!-- text -->
                                                            <div id="video" class="d-none">
                                                                <span>Video Call</span>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="text-link texttooltip"
                                                           data-template="adduser">
                                                            <i class="fe fe-user-plus fs-3"></i>
                                                            <!-- text -->
                                                            <div id="adduser" class="d-none">
                                                                <span>Add User</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="chatContainer" class="px-4 py-4 vh-100 overflow-hidden">


                                            </div>
                                            <!-- chart footer -->
                                            <div class="bg-light px-4 py-3 chat-footer mt-auto" style="bottom: 0!important;">
                                                <div class="bg-white p-2 rounded-3 shadow-sm">
                                                    <form id="myForm" onsubmit="return false;">
                                                        <div class="position-relative">
                                                            <textarea
                                                                class="form-control border-0 form-control-simple no-resize"
                                                                id="messageInput"
                                                                placeholder="Type a New Message" rows="1"></textarea>
                                                        </div>
                                                        <div class="position-absolute end-0 mt-n7 me-4">
                                                            <button type="button"
                                                                    class="fs-3 btn text-primary btn-focus-none" id="sendButton">
                                                                <i class="fas fa-send"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="mt-3 d-flex">
                                                    <div>
                                                        <a href="#" class="text-link me-2 fs-4"><i
                                                                class="bi-emoji-smile"></i></a>
                                                        <a href="#" class="text-link me-2 fs-4"><i
                                                                class="bi-paperclip"></i></a>
                                                        <a href="#" class="text-link me-3 fs-4"><i
                                                                class="bi-mic"></i></a>
                                                    </div>
                                                    <div class="dropdown">
                                                        <a href="#" class="text-link fs-4" id="moreAction"
                                                           data-bs-toggle="dropdown" aria-haspopup="true"
                                                           aria-expanded="false">
                                                            <i class="fe fe-more-horizontal"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="moreAction">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 884px; height: 1175px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                 style="height: 789px; transform: translate3d(0px, 174px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        // Отримуємо CSRF токен з мета-тегу
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // URL API для відправки повідомлення
        const url = 'chat/submit';

        // Отримуємо елементи для кнопки та textarea
        const sendButton = document.getElementById('sendButton');
        const messageInput = document.getElementById('messageInput');
        const chatContainer = document.getElementById('chatContainer'); // Контейнер для чату

        // Додаємо обробник події для кнопки
        sendButton.addEventListener('click', function(event) {
            event.preventDefault(); // Запобігаємо відправці форми та перезавантаженню сторінки

            // Отримуємо значення з textarea
            const message = messageInput.value;

            // Якщо поле не порожнє, відправляємо запит
            if (message.trim() !== '') {
                // Дані, які ми хочемо відправити
                const requestData = {
                    message: message
                };

                // Виконання POST запиту за допомогою fetch
                fetch(url, {
                    method: 'POST', // Вказуємо метод POST
                    headers: {
                        'Content-Type': 'application/json', // Вказуємо тип контенту
                        'X-CSRF-TOKEN': csrfToken // Додаємо CSRF токен до заголовків
                    },
                    body: JSON.stringify(requestData) // Перетворюємо об'єкт у JSON
                })
                    .then(response => response.json()) // Отримуємо відповідь у форматі JSON
                    .then(data => {
                        console.log(data); // Виведення відповіді від API

                        // Додаємо нове повідомлення користувача в чат
                        addSentMessage(message);

                        // Очищаємо поле після відправки
                        messageInput.value = '';
                        setTimeout(() => {
                            addReceivedMessage(data.message);
                        }, 3000);
                    })
                    .catch(error => {
                        console.error('Помилка:', error); // Обробка помилок
                    });
            } else {
                console.log('Поле повідомлення порожнє');
            }
        });

        // Функція для додавання відправленого повідомлення
        function addSentMessage(message) {
            const newMessage = document.createElement('div');
            newMessage.classList.add('message', 'message-sent'); // Додаємо клас для повідомлення користувача
            newMessage.innerHTML = `
            <div class="d-flex justify-content-end"> <!-- Розміщуємо повідомлення справа -->
                <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle">
                </div>
                <div class="ms-2">
                    <p class="mb-0">${message}</p>
                </div>
            </div>
        `;

            // Додаємо повідомлення в контейнер чату
            chatContainer.appendChild(newMessage);
        }

        // Функція для додавання отриманого повідомлення
        function addReceivedMessage(message) {
            const newMessage = document.createElement('div');
            newMessage.classList.add('message', 'message-received'); // Додаємо клас для отриманого повідомлення
            newMessage.innerHTML = `
            <div class="d-flex justify-content-start"> <!-- Розміщуємо повідомлення зліва -->
                <div class="avatar avatar-md avatar-indicators avatar-online">
                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle">
                </div>
                <div class="ms-2">
                    <p class="mb-0">${message}</p>
                </div>
            </div>
        `;

            // Додаємо повідомлення в контейнер чату
            chatContainer.appendChild(newMessage);
        }

        // // Приклад: автоматично отримуємо відповідь після 3 секунд (для тестування)
        // setTimeout(() => {
        //     addReceivedMessage("Це відповідь від іншого користувача або системи.");
        // }, 3000); // Просто для демонстрації
    </script>


@endsection

<?php
$hideFooter = true;
?>
