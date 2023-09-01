<!-- Footer -->
<footer id="footer" class="footer">
    <div class="container text-center">
        &copy; Copyright <strong><span>ShoeShop | 2023</span></strong>. All Rights Reserved
    </div>
</footer>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url() ?>template/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/quill/quill.min.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?= base_url() ?>template/admin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= base_url() ?>template/admin/assets/js/main.js"></script>

<!-- Code injected by live-server -->
<script>
    // <![CDATA[  <-- For SVG support   
    if ('WebSocket' in window) {
        (function () {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function (msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    }
    else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    
    // ]]>
</script>
<script>
        window.setTimeout(function() {
            $('.alert').fadeTo(500,0).slideUp(500,function() {
                $(this).remove();
            });
        }, 3000)
    </script>    
</body>
</html>
