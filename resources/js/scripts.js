document.addEventListener('DOMContentLoaded', function () {
    /**
     * When someone chooses option in select, append it to UL list
     */
    document.getElementById('selecting-interests').addEventListener('change', function () {
        console.log('change');  
        let select = document.getElementById('selecting-interests');
        let option = select.options[select.selectedIndex].text;
        let optionValue = select.options[select.selectedIndex].value;

        // Get array of selected options
        let selectedOptions = Array.from(document.querySelectorAll('#selected-interests-ul li')).map(li => li.textContent);

        // Check if option is already selected
        if (selectedOptions.includes(option)) {
            alert('This option is already selected');
            return;
        }

        let ul = document.getElementById('selected-interests-ul');
        let li = document.createElement('li');

        li.appendChild(document.createTextNode(option));

        // Append new li
        ul.appendChild(li);

        // Remove selected option from select
        //select.options[select.selectedIndex].remove();

        // Add hidden input to form
        let input = document.createElement('input');
        input.setAttribute('type', 'hidden');
        input.setAttribute('name', 'interest[]');
        input.setAttribute('value', optionValue);
        li.appendChild(input);
    });
});