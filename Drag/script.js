const cards = document.querySelectorAll('.card');
const dropzones = document.querySelectorAll('.dropzone');

// Cards 
cards.forEach((card) => {
    card.addEventListener('dragstart', dragstart);
    card.addEventListener('dragend', dragEnd);
    card.addEventListener('drag', drag);
});


function dragstart(){
    //this = card
    dropzones.forEach((dropzone) => {
        dropzone.classList.add('highlight');
    });

    this.classList.add('is-dragging');
}

function dragEnd(){
    //this = card
    dropzones.forEach((dropzone) => {
        dropzone.classList.remove('highlight');
    });

    this.classList.remove('is-dragging');
}

function drag(){
    // console.log('card drag');
}

// dropzones
dropzones.forEach((dropzone) => {
    dropzone.addEventListener('dragover', dragover);
    dropzone.addEventListener('dragenter', dragenter);
    dropzone.addEventListener('dragleave', dragleave);
    dropzone.addEventListener('drop', drop);
});

function dragover(){
    //this = dropzone
    this.classList.add('over');

    const cardBeingDragged = document.querySelector('.is-dragging');

    this.appendChild(cardBeingDragged);
}

function dragenter(){
    //this = dropzone
}

function dragleave(){
    //this = dropzone
    this.classList.remove('over');
}

function drop(){
    console.log('dropzone drop');
}