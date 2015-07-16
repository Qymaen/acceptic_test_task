var formatGPA = function(gpa) {

    var rating = 0.0;

    switch (gpa) {
        case 'A+' :
            rating = 4.0;
            break;
        case 'A' :
            rating = 4.0;
            break;
        case 'A-' :
            rating = 3.7;
            break;
        case 'B+' :
            rating = 3.3;
            break;
        case 'B' :
            rating = 3.0;
            break;
        case 'B-' :
            rating = 2.7;
            break;
        case 'C+' :
            rating = 2.3;
            break;
        case 'C' :
            rating = 2.0;
            break;
        case 'C-' :
            rating = 1.7;
            break;
        case 'D+' :
            rating = 1.3;
            break;
        case 'D' :
            rating = 1.0;
            break;
        case 'E/F' :
            rating = 0.0;
            break;
        default :
            rating = 0.0;
            break;
    }
    
    return rating;
};

var calculateGPA = function() {
    var ratings = document.querySelectorAll('.subject_rating');
    var ratingsTotal = 0.0;
    var ratingsCount = 0;
    var gpa = 0;

    for (var index in ratings) {
        if (isNaN(index)) {
            continue;
        }

        ratingsTotal += formatGPA(ratings[index].innerText);
        ++ratingsCount;
    }

    if (ratingsCount === 0) {
        return;
    }

    gpa = ratingsTotal / ratingsCount;

    return gpa;
};


document.addEventListener('DOMContentLoaded', function() {
    // calculate GPA
    var gpa = calculateGPA();
    var gpaElement = document.querySelectorAll('.gpa_container span');
    gpaElement[0].innerText = gpa;

    // reload page
    var studentSelectElement = document.getElementById('userId');

    studentSelectElement.addEventListener('change', function() {
        window.location = window.location.pathname + '?userId=' + this.value;
    });
});





















