// Countries
var category_arr = new Array('Hobbies','Music','films','visual arts','science and technology','sports and fitness');
// States
var s_a = new Array();
s_a[0] = "Book|Drawing and painting|Gaming|other";
s_a[1] = "Badakhshan|Badghis|Baghlan|Balkh|Bamian|Farah|Faryab|Ghazni|Ghowr|Helmand|Herat|Jowzjan|Kabol|Kandahar|Kapisa|Konar|Kondoz|Laghman|Lowgar|Nangarhar|Nimruz|Oruzgan|Paktia|Paktika|Parvan|Samangan|Sar-e Pol|Takhar|Vardak|Zabol";
s_a[2] = "comedy|films|TV|gaming|others";
s_a[3] = "craft|fine arts|lietrary arts|Musical|Orchestra|Threatre|Others";
s_a[4] = "Biotech|Coding|Mobile|Robotics|science|Social Media|Others";
s_a[5] = "Basketball|Cycling|Exercise|Football|Hockey|Motor Sports|Running|Swimming|tennis|Volleyball|Walking|Yoga|Others";


function populatesub-category(category, sub-category) {

    var selectedCategoryIndex = document.getElementById(#category).selectedIndex;

    var sub-categoryElement = document.getElementById("sub-category");

    sub-categoryElement.length = 0; // Fixed by Julian Woods
    sub-categoryElement.options[0] = new Option('Select sub-catogory', '');
    sub-categoryElement.selectedIndex = 0;

    var sub-category_arr = s_a[selectedCategoryIndex].split("|");

    for (var i = 0; i < sub-category_arr.length; i++) {
        sub-categoryElement.options[sub-categoryElement.length] = new Option(sub-category_arr[i], sub-category_arr[i]);
    }
}


function populateCategory(category, sub-category) {
    // given the id of the <select> tag as function argument, it inserts <option> tags
    var categoryElement = document.getElementById(category);
    categoryElement.length = 0;
    categoryElement.options[0] = new Option('Select Category', '-1');
    categoryElement.selectedIndex = 0;
    for (var i = 0; i < category_arr.length; i++) {
        categoryElement.options[categoryElement.length] = new Option(category_arr[i], category_arr[i]);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (sub-category) {
        categoryElement.onchange = function () {
            populateStates(category, sub-category);
        };
    }
}