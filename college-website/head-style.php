<style>
        .banner{
            background: url("assets/images/banner.jpeg");
            background-color: rgba(0,0,0,.5);
            height:500px;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .banner p{
            font-size:22px;
            margin:0px;
            text-align: center;
            color:#ffffff;
            font-family: 'Rajdhani', sans-serif;
            transform: translate(0%, 500%);
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $("a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>