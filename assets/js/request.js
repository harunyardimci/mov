$(document).ready(function () {

    var searchKeyword = $('#txtSearch').val(),
        getContent = function () {

            if (searchKeyword.length <= 2) {
                return false;
            }

            //hide the content and show the progress bar
            $('#searchResult').hide();

            //generate the parameter for the php script
            var data = 'keyword=' + searchKeyword;
            $.ajax({
                url: "request.ajax.php",
                type: "GET",
                data: data,
                cache: false,
                success: function (html) {
                    //add the content retrieved from ajax and put it in the #content div
                    $('.searchResult').html(html);

                    //display the body with fadeIn transition
                    $('.searchResult').fadeIn('slow');
                }
            });
        };

    //Seearch for link with REL set to ajax
    $('#txtSearch').click(function () {

        //run the ajax
        getContent();

        //cancel the anchor tag behaviour
        return false;
    });
});