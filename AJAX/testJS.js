/**
 * Created by Dorota on 2015-10-06.
 */
var xhr =new XMLHttpRequest();
xhr.open('GET', 'test.json', true);
xhr.send();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        var result = JSON.parse(xhr.responseText);
        console.log(result);
        console.log(result.colors[0]);
    }
};