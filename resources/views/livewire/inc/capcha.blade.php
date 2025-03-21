<script src="https://static.geetest.com/v4/gt4.js"></script>
<div>
    <div id="captcha"></div>
</div>
<script>
    var captchaId = "e69dae1839c6c93fdf2843d13a3eae5e";
    var product = "popup";
    initGeetest4({
        captchaId: captchaId,
        product: product,
    }, function (gt) {
        window.gt = gt;
        gt.appendTo("#captcha").onSuccess(function (e) {
            Livewire.dispatch('CapchaUpdate');
        });

        $('#btn').click(function () {
            gt.showBox();
        });
        $('#reset_btn').click(function () {
            gt.reset();
        });
    });
</script>