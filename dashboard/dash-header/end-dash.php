</div>
</div>
</div>
</div>
</div>
<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- menu js -->
<script src="assets/js/pcoded.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script src="assets/js/vertical-layout.min.js "></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>

<script type="text/javascript" src="assets/js/script.js "></script>
<script type="text/javascript">
        let requestNumbers = document.querySelectorAll('.request-number');

        requestNumbers.forEach(requestNumbers => {
            requestNumbers.addEventListener('click', () => {
                Swal.fire({
                    icon: 'error',
                    text: 'You are not authorized to access this page yet!',

                })
                $(".swal2-styled.swal2-confirm").css('background-color', '#1a76ac');
            });
        });
</script>
        