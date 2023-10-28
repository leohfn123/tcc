newFunction();

function newFunction() {
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('check');
        checkbox.addEventListener('change', function () {
            if (this.checked) {
                document.body.classList.add('dark-mode');
            } else {
                document.body.classList.remove('dark-mode');
            }
        });
    });
}
