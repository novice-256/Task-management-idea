



//  Drag a Task
//  Drag a Task
$('.draggable').on('dragstart', function(event) {
    $(this).addClass('is-dragging');
    });

    $('.draggable').on('dragend', function() {
        $('.draggable').removeClass('is-dragging');


    });
    $('.droppable').on('dragover', function(event) {
            event.preventDefault();
            const dragElement = document.querySelector('.is-dragging');
            const mouseY = event.clientY;
            const nearestItem = getNearestItem(this, mouseY);
            if (nearestItem) {
                this.insertBefore(dragElement, nearestItem);
            } else {
                this.appendChild(dragElement);
            }
        });
    function getNearestItem(container, mouseY) {
        const items = container.querySelectorAll('.draggable:not(.is-dragging):not(.not-placeable)');
        let nearestItem = null;
        items.forEach(item => {
            const rect = item.getBoundingClientRect();
            const containerBox = container.getBoundingClientRect();
            let threshold = containerBox.height /2
            let containerEdge = containerBox.bottom - threshold
            const elemTop = rect.top - threshold;
            const elemBottom = rect.bottom + threshold;
            if (mouseY > elemTop && mouseY < elemBottom && mouseY < containerEdge) {
                // console.log(mouseY ,'should be in the range of', elemTop,'container bottom',containerBox.bottom,'and',elemBottom);
                nearestItem = item;
            }
        });
        return nearestItem;
    }