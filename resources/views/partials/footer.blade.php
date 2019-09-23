@section('scripts')
    <script>
      $(document).ready(function()  {
        $('#newsletterForm').submit(function(e) {
          $('#newsletterSubmitButton').addClass('btn--loading')
          e.preventDefault();
          $.ajax({
            url:'https://medicaremedicaidadvisors.activehosted.com/proc.php',
            type:'post',
            data:$('#newsletterForm').serialize(),
            success:function(){
              Swal.fire({
                title: 'Thank You for Subscribing our Newsletter!',
                text: 'Please check your email to verify it.',
                type: 'success',
                timer: 3000
              })
              $('#newsletterForm')[0].reset()
              $('#newsletterSubmitButton').removeClass('btn--loading')
            },
            error: function (xhr) {
              if (xhr.status === 0) {
                Swal.fire({
                  title: 'Thank You for Subscribing our Newsletter!',
                  text: 'Please check your email to verify it.',
                  type: 'success',
                  timer: 3000
                })
                $('#newsletterForm')[0].reset()
                $('#newsletterSubmitButton').removeClass('btn--loading')
              } else {
                Swal.fire({
                  title: 'Error!',
                  text: 'Something went wrong please verify data or contact the MMA team.',
                  type: 'error',
                  timer: 3000
                })
                $('#newsletterSubmitButton').removeClass('btn--loading')
              }
            }
          });
        });
      });
    </script>
@endsection

<section class="footer py-16">
    <div class="container mx-auto">
        <div class="flex flex-row flex-wrap justify-between">
            <!-- <div class="mx-auto w-3/4 lg:w-1/3 pb-8">
                <div class="flex flex-col mx-auto items-center lg:items-start">
                    <img class="w-5/12 h-auto mb-3" src="images/Left.png" />
                    <img class="w-5/12 h-auto" src="images/MMAlogobold.jpg" />
                </div>
            </div> -->

            <div class="flex flex-col w-full lg:w-1/3 pb-8">
                <div class="flex flex-row flex-wrap justify-around text-center font-bold">
                    <!-- <a href="/planfinder" class="w-1/2 lg:w-1/3 py-2">Plan Finder</a> -->
                    <a href="/services" class="w-1/2 lg:w-1/2 py-2">Services</a>
                    <a href="/contact" class="w-1/2 lg:w-1/2 py-2">Contact</a>
                    <a href="/products" class="w-1/2 lg:w-1/2 py-2">Products</a>
                    <a href="/feedback" class="w-1/2 lg:w-1/2 py-2">Feedback</a>
                    <a href="/resource" class="w-1/2 lg:w-1/2 py-2">Resources</a>
                    <a href="/about" class="w-1/2 lg:w-1/2 py-2">About MMA</a>
                    <a href="/careers" class="w-1/2 lg:w-1/2 py-2">Careers</a>
                    <a href="/community-outreach" class="w-1/2 lg:w-1/2 py-2">Outreach</a>
                </div>
            </div>

            <div class="flex flex-col w-full lg:w-1/3 px-8">
                <p class=" text-gray-700  text-center lg:text-left">
                    Join our newsletter to stay up-to-date on features and releases
                </p>

                <form
                    method="POST"
                    id="newsletterForm"
                    name="newsletterForm"
                    class="w-full mx-auto max-w-sm pt-6"
                    action="https://medicaremedicaidadvisors.activehosted.com/proc.php"
                >
                    <input type="hidden" name="u" value="3" />
                    <input type="hidden" name="f" value="3" />
                    <input type="hidden" name="s" />
                    <input type="hidden" name="c" value="0" />
                    <input type="hidden" name="m" value="0" />
                    <input type="hidden" name="act" value="sub" />
                    <input type="hidden" name="v" value="2" />
                    <div class="flex items-center border-b border-b-2 border-teal-500 py-2 bg-white pl-2 pr-4">
                        <input
                            class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none"
                            name="email"
                            type="email"
                            placeholder="Enter Your Email Address"
                            aria-label="Email Address"
                            required
                        />
                        <button id="newsletterSubmitButton" class="flex-shrink-0 text-lg font-strong text-mmablue hover:text-blue" type="submit">
                            >
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
