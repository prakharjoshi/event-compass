/*
    *   Original script by: Shafiul Azam
    *   Version 4.0
    *   Modified by: Luigi Balzano

    *   Description:
    *   Inserts Countries and/or States as Dropdown List
    *   How to Use:

        In Head section:
        ----------------
        <script type= "text/javascript" src = "countries.js"></script>
        
        In Body Section:
        ----------------
        Select Country (with states):   <select id="country" name ="country"></select>
            
        Select State: <select name ="state" id ="state"></select>

        Select Country (without states):   <select id="country2" name ="country2"></select>
            
        <script language="javascript">
            populateCountries("country", "state");
            populateCountries("country2");
        </script>

    *
    *   License: Free to copy, distribute, modify, whatever you want to.
    *   Aurthor's Website: http://bdhacker.wordpress.com
    *
*/

// Countries
var country_arr = new Array("Film & Entertainment","Hobbies & Special interest","Music","Visual arts","Science and technology","Sports and fitness");
// States
var s_a = new Array();
s_a[0]="";
s_a[1]="Comedy|Film|TV|Gaming|Comics|Other";
s_a[2]="Books|Drawing & Painting|Other";
s_a[3]="Alternative|Blues & Jazz|Classical|EDM|Folk|Hip-Hop & Rap|Indie|Metal|Pop|R&B|Religious|Rock|Other";
s_a[4]="Comedy|Craft|Fine Arts|Literary Art|Musica|Orchestra|Theatre|Other";
s_a[5]="Biotech|Coding|Mobile|Robotics|Science|Social Media|Other";
s_a[6]="Basketball|Cycling|Exercise|Football|Hockey|Motorsports|Running|Swimming|Tennis|Volleyball|Walking|Yoga|Other";



function populateStates( countryElementId, stateElementId ){
    
    var selectedCountryIndex = document.getElementById( countryElementId ).selectedIndex;

    var stateElement = document.getElementById( stateElementId );
    
    stateElement.length=0;  // Fixed by Julian Woods
    stateElement.options[0] = new Option('Select Sub-Category','-1');
    stateElement.selectedIndex = 0;
    
    var state_arr = s_a[selectedCountryIndex].split("|");
    
    for (var i=0; i<state_arr.length; i++) {
        stateElement.options[stateElement.length] = new Option(state_arr[i],state_arr[i]);
    }
}

function populateCountries(countryElementId, stateElementId)
    {
        // given the id of the <select> tag as function argument, it inserts <option> tags
        var countryElement = document.getElementById(countryElementId);
        countryElement.length=0;
        countryElement.options[0] = new Option('Select Category','-1');
        countryElement.selectedIndex = 0;
        for (var i=0; i<country_arr.length; i++) {
        countryElement.options[countryElement.length] = new Option(country_arr[i],country_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if( stateElementId )
    {
        countryElement.onchange = function(){
            populateStates( countryElementId, stateElementId );
    };
    }
}