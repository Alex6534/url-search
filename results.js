$('document').ready(function() {
    $('form').submit(function(e){  //on form submit
        e.preventDefault();
        $.ajax({ //AJAX call
            type: 'post',
            url: $(this).attr('action'), //monitor form action on submit
            data: $(this).serialize(), //serialize form data
            dataType: 'json', //set data type to json
            success: function(response){ //if the call is successful, grab the response

                var urlCount = $('#count'); //div to store number of links
                var listResults = $('#list_results'); //div to store returned URLs

                urlCount.empty(); //refresh/empty on each success
                listResults.empty(); //refresh/empty on each success

                if ($.isEmptyObject(response.urls)) {
                    urlCount.html('No results found');
                } //check if JSON object is empty, if so show error

                else {
                    urlCount.html('There are '+ (response.urls.length) + ' URLs:'); //count the number of json objects
                    $(response.urls).each(function(){ //for element in JSON object...
                        var domain = 'http://www.ed.ac.uk';

                        /*
                        output the object results within a ol > li,
                        concatenate the domain to the element (ensure element whitespace is trimmed),
                        with anchor tag and blank href
                         */

                        listResults.append('<li><a class="link" target="_blank" href="">' + domain + $.trim(this) + '</a></li');
                        for (var i = 0; i < this.length; i++) { //loop through objects
                            $('a.link').attr('href', function(i){ //for each a tag with class link
                                var href = domain.concat($.trim(response.urls[i]));
                                return String(href); //convert href variable to string

                            })
                        }
                    });
                }
                console.log(response.urls); //output json object to console.
            }
        })
    });

    $('#hide_numbers').toggle(function(){
        if(this.checked){
            $('ol').css("list-style-type:none");
        }
        else {

        }
    });
});

function ConvertToCSV(response.urls){
    var array = typeof response.urls != 'object' ? JSON.parse(response.urls) : response.urls;
    var str = '';

    for (var i = 0; i < array.length; i++){
        var line = '';
        for (var index in array[i]) {
            if (line != '') line+= ','

            line += array[i][index];
        }

        str += line + '\r\n';
    }
    
    return str;
}