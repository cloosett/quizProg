document.getElementById('addSectionBtn').addEventListener('click', function() {
    const accordion = document.getElementById('accordionExample');
    const newSectionId = 'collapseNew' + Date.now();

    const newAccordionItem = document.createElement('div');
    newAccordionItem.classList.add('accordion-item');

    const newAccordionHeader = document.createElement('h2');
    newAccordionHeader.classList.add('accordion-header');

    const newAccordionButton = document.createElement('button');
    newAccordionButton.classList.add('accordion-button', 'collapsed');
    newAccordionButton.setAttribute('type', 'button');
    newAccordionButton.setAttribute('data-bs-toggle', 'collapse');
    newAccordionButton.setAttribute('data-bs-target', `#${newSectionId}`);
    newAccordionButton.setAttribute('aria-expanded', 'false');
    newAccordionButton.setAttribute('aria-controls', newSectionId);
    newAccordionButton.textContent = 'New Question';

    // Контейнер для кнопки та іконки видалення
    const headerContainer = document.createElement('div');
    headerContainer.classList.add('d-flex', 'justify-content-between', 'align-items-center', 'w-100');

    // Додаємо кнопку до контейнера
    headerContainer.appendChild(newAccordionButton);

    // Створюємо іконку для видалення
    const deleteIcon = document.createElement('i');
    deleteIcon.classList.add('bi', 'bi-trash', 'text-danger', 'fs-5', 'cursor-pointer', 'p-2');


    // Додаємо іконку в контейнер
    headerContainer.appendChild(deleteIcon);

    // Додаємо подію для видалення
    deleteIcon.addEventListener('click', function() {
        newAccordionItem.remove(); // Видаляємо акорд (секцію) з DOM
    });

    newAccordionHeader.appendChild(headerContainer);


    const newAccordionCollapse = document.createElement('div');
    newAccordionCollapse.classList.add('accordion-collapse', 'collapse');
    newAccordionCollapse.setAttribute('id', newSectionId);
    newAccordionCollapse.setAttribute('data-bs-parent', '#accordionExample');

    const newAccordionBody = document.createElement('div');
    newAccordionBody.classList.add('accordion-body');

    const questionInput = document.createElement('input');
    questionInput.type = 'text';
    questionInput.classList.add('form-control', 'mb-2');
    questionInput.placeholder ='Enter question...';

    const saveQuestionButton = document.createElement('button');
    saveQuestionButton.classList.add('btn', 'btn-primary', 'mt-2', 'mb-3');
    saveQuestionButton.textContent = 'Save question';
    saveQuestionButton.type = 'button';

    newAccordionBody.appendChild(questionInput);
    newAccordionBody.appendChild(saveQuestionButton);

    newAccordionBody.innerHTML += `
        <div>Answers: </div>
        <div class="additional-answers-container"></div>
        <button class="btn btn-primary mt-3 addAnswerBtn" type="button">Add answer</button>
    `;

    newAccordionCollapse.appendChild(newAccordionBody);

    newAccordionItem.appendChild(newAccordionHeader);
    newAccordionItem.appendChild(newAccordionCollapse);

    accordion.appendChild(newAccordionItem);
    const modal = new bootstrap.Modal(document.getElementById('addSectionModal'));
    modal.hide();
});
document.getElementById('accordionExample').addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('btn-primary')) {
        const questionInput = event.target.previousElementSibling;

        const questionText = questionInput.value.trim();

        if (questionText) {
            const questionSpan = document.createElement('span');
            questionSpan.classList.add('fw-semibold', 'text-secondary', 'mb-3');
            questionSpan.textContent = questionText;

            questionInput.parentNode.insertBefore(questionSpan, questionInput);
            questionInput.remove();

            event.target.style.display = 'none';
        } else {
            alert('Будь ласка, введіть питання');
        }
    }
});

document.getElementById('accordionExample').addEventListener('click', function(event) {
    if (event.target && event.target.classList.contains('addAnswerBtn')) {
        event.preventDefault();
        const additionalAnswersContainer = event.target.closest('.accordion-body').querySelector('.additional-answers-container');

        const newAnswerDiv = document.createElement('div');
        newAnswerDiv.classList.add('d-flex', 'align-items-center', 'mb-2');

        const newAnswerInput = document.createElement('input');
        newAnswerInput.type = 'text';
        newAnswerInput.classList.add('form-control', 'me-2', 'mt-2');
        newAnswerInput.style.width = '250px';
        newAnswerInput.placeholder = 'Введіть нову відповідь...';

        const createButton = document.createElement('button');
        createButton.type = 'button';
        createButton.classList.add('btn', 'btn-success', 'btn-sm', 'mt-2');
        createButton.textContent = 'Створити';

        newAnswerDiv.appendChild(newAnswerInput);
        newAnswerDiv.appendChild(createButton);

        additionalAnswersContainer.appendChild(newAnswerDiv);

        const sectionId = event.target.closest('.accordion-collapse').id;

        createButton.addEventListener('click', function() {
            const answerText = newAnswerInput.value.trim(); // Отримуємо текст з інпуту

            if (answerText) {
                const newAnswerContainer = document.createElement('div');
                newAnswerContainer.classList.add('d-flex', 'align-items-center', 'mt-2');


                const radioButton = document.createElement('input');
                radioButton.type = 'radio';
                radioButton.name = `answer_${sectionId}`;
                radioButton.value = answerText;
                radioButton.classList.add('form-check-input', 'me-2');

                const answerTextDiv = document.createElement('span');
                answerTextDiv.textContent = answerText;

                newAnswerContainer.appendChild(radioButton);
                newAnswerContainer.appendChild(answerTextDiv);

                additionalAnswersContainer.appendChild(newAnswerContainer);

                newAnswerInput.value = '';
                newAnswerDiv.style.display = 'none';
                newAnswerInput.style.display = 'none';
                createButton.style.display = 'none';
            } else {
                alert('Будь ласка, введіть відповідь.');
            }
        });
    }
});

document.getElementById('quizForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const sections = document.querySelectorAll('.accordion-item');
    const quizData = [];

    sections.forEach(section => {
        const questionText = section.querySelector('span').textContent.trim();
        const answers = [];
        let correctAnswer = null;

        const answerContainers = section.querySelectorAll('.additional-answers-container');
        answerContainers.forEach(answerContainer => {
            const answerSpans = answerContainer.querySelectorAll('span');
            answerSpans.forEach(span => {
                const answerText = span.textContent.trim();
                answers.push(answerText);
            });
            const isCorrect = answerContainer.querySelector('input[type="radio"]:checked') !== null;
            if (isCorrect) {
                correctAnswer = answerContainer.querySelector('input[type="radio"]:checked').value;
            }

        });

        quizData.push({ question: questionText, answers: answers, correct_answer: correctAnswer });
    });

    // Create hidden input for quiz data to send with the form
    const quizDataField = document.createElement('input');
    quizDataField.type = 'hidden';
    quizDataField.name = 'quizData'; // This will be the field used to access data in the controller
    quizDataField.value = JSON.stringify(quizData); // Convert quiz data to JSON

    // Append it to the form
    document.getElementById('quizForm').appendChild(quizDataField);
    event.target.submit();
});


