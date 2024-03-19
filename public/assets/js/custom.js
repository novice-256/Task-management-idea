/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";
/**
 *
 *  Toggle task form 
 * 
 */
$(()=>{
    $('#close-task-form').on('click',()=>{
        $('#add-task-form').hide()

    })
    let labelColor
    let labelData =[]
    $('.label_color').on('click',function(){

        labelColor =$(this).val()
    })
    $('#add-label').on('click', e => {
    e.preventDefault();
    let labelName = $('#label_name').val();
    var labelBadge = `<span class="badge bg-${labelColor} text-white">
        <i class="fa-regular fa-circle-xmark mx-1" onClick="$(this).closest('.badge').remove()"></i>${labelName}
        </span>`;
        labelData.push({ labelName: labelName, labelColor: labelColor })
        $('#label-data-input').val(JSON.stringify(labelData));
        $('#label-data').append(labelBadge);
        $('#label_name').val('');
});


})