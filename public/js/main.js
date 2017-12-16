$(document).ready(function(){
    $('.delete-btn').click(function () {
        var id = $(this).attr('data-id');
        var product = $(this).attr('data-route');

        var route = '/cheerleader/delete-'+ product;

        $('.delete-modal-content').text(product);
        $('.delete-modal-form-input-hidden').val(id);
        $('.delete-modal-form').prop('action', route);

    });

//update
    $(".update").click(function () {
        $(this).parent().children('.update-section').toggleClass('d-none');

    });

//Mark All option
    function toggleSelectAll(control) {

        var allOptionIsSelected = (control.val() || []).indexOf("All") > -1;
        function valuesOf(elements) {
            return $.map(elements, function(element) {
                return element.value;
            });
        }

        if (control.attr('data-allOptionIsSelected') != allOptionIsSelected.toString()) {

            // User clicked 'All' option
            if (allOptionIsSelected) {
                // Can't use .selectpicker('selectAll') because multiple "change" events will be triggered
                control.selectpicker('val', valuesOf(control.find('option')));
            } else {
                control.selectpicker('val', []);
            }
        }
        else {

            // User clicked other option
            if (allOptionIsSelected && control.val().length != control.find('option').length) {
                // All options were selected, user deselected one option
                // => unselect 'All' option
                control.selectpicker('val', valuesOf(control.find('option:selected[value!=All]')));
                allOptionIsSelected = false;
            } else if (!allOptionIsSelected && control.val().length == control.find('option').length - 1) {
                // Not all options were selected, user selected all options except 'All' option
                // => select 'All' option too
                control.selectpicker('val', valuesOf(control.find('option')));
                allOptionIsSelected = true;
            }
        }
        control.attr('data-allOptionIsSelected', allOptionIsSelected);
    }

        $('.selectpicker').selectpicker().change(function(){toggleSelectAll($(this));}).trigger('change');


// profile pic changing
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#profile_img').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#profile_pic").change(function() {
        readURL(this);
    });
});




