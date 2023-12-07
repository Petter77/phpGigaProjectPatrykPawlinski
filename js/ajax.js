$(document).ready(function () {
    let offset = 0;
    let limit = 3;
    let allDataDisplayed = false;

    function loadData() {
        let container = $('#middle-section');
        let loadMoreButton = $('#load-more');

        $.ajax({
            url: 'scripts/ajaxScripts.php',
            type: 'POST',
            data: { offset: offset },
            dataType: 'json',
            success: function (data) {
                if (data.length === 0) {
                    container.append('<p>Brak więcej danych do wyświetlenia.</p>');
                    loadMoreButton.hide();
                    allDataDisplayed = true;
                } else {
                    let nextRecord = data[2];
                    console.log('Zawartość następnego rekordu:', nextRecord);

                    data.forEach(function (row) {
                        let postHtml = '<div class="post">' +
                            '<div class="post-author">' + row.author + '</div>' +
                            '<div class="post-content">' + row.content + '</div>' +
                            '</div>';
                        container.append(postHtml);
                    });
                    offset += limit;

                    loadMoreButton.show();
                }
            }
        });
    }

    $('#load-more').on('click', function () {
        loadData();

        if (allDataDisplayed) {
            $('#load-more').hide();
        }
    });

    loadData();
});