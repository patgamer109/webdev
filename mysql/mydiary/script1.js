$(
    function () {
        $("#diaryForm .btn-primary").click(function(evt){
            evt.preventDefault();
            const mydiary = $("#diary").val();
            alert(mydiary);
            $.post("savediary.php", {mydiary, isAjax: 1}, function(result) {
                if (result != 1) {
                    alert(result);
                }
            });
        });
    }    
);