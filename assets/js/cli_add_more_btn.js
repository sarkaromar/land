$(document).ready(function () {
    
// add package page ------------------------------------------------------------

    // for feature field -------------------------------------------------------
    var feat_max_fields = 20; //maximum input boxes allowed
    var feat_wrapper = $("#feat_fields"); //Fields wrapper
    var feat_add_button = $("#add_feat_btn"); //Add button ID

    var x = 1; //initlal text box count
    $(feat_add_button).click(function (e) { //on add input button click
        e.preventDefault();
        if (x < feat_max_fields) { //max input box allowed
            x++; //text box increment
            $(feat_wrapper).append('<div id="feat_field" class="form-group"><label class="col-sm-2 control-label"></label><div class="col-sm-8"><div id="full_width" class="single_form"><input class="form-control" type="text" name="feat[]" placeholder="e.g: write feature here..." required autocomplete></div></div><div id="remove_btn" class="col-sm-2"><button type="button" id="remove_feat_btn" class="btn btn-danger"><i class="fa fa-fw fa-remove fa-lg"></i> Remove</button></div></div>'); //add input box
        }
    });

    $(feat_wrapper).on("click", "#remove_feat_btn", function (e) { //user click on remove text
        e.preventDefault();
        $('#remove_btn').parent('div#feat_field').remove();
        x--;
    })
        
// add package page end --------------------------------------------------------

});
