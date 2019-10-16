@extends('layouts.secondary')


@section('scripts')
    <script>
      $(document).ready(function()  {
        $('#feedbackForm').submit(function(e) {
          $('#formSubmitButton').addClass('btn--loading')
          e.preventDefault();
          $.ajax({
            url:'https://medicaremedicaidadvisors.activehosted.com/proc.php',
            type:'post',
            data:$('#feedbackForm').serialize(),
            success:function(){},
            error: function (xhr) {
              if (xhr.status === 0) {
                $.ajax({
                  url:'/api/feedback',
                  type:'post',
                  data:$('#feedbackForm').serialize(),
                  success:function(){
                    Swal.fire({
                      title: 'Thank You for Your Feedback!',
                      text: 'We received your feedback and will get back in touch with you shortly.',
                      type: 'success',
                      timer: 3000
                    })
                    $('#feedbackForm')[0].reset()
                    $('#formSubmitButton').removeClass('btn--loading')
                  }
                })
              } else {
                Swal.fire({
                  title: 'Error!',
                  text: 'Something went wrong please verify data or contact the MMA team.',
                  type: 'error',
                  timer: 3000
                })
                $('#formSubmitButton').removeClass('btn--loading')
              }
            }
          });
        });
      });
    </script>
@endsection

@section('content')

    @include('partials.minihero', [
        'minihero_title' => 'Feedback',
        'minihero_desc' => 'We strive to be the best at what we do, and that is why we cherish your feedback. That way we can grow better for you.',
        'image_bg' => 'feedback/feedback_header_flipped.jpeg',
    ])

    @include('partials.phonenumcta')

    <section class="feedback py-16">
        <div class="container mx-auto">
            <div class="flex flex-row flexbox flex-wrap">
                <div class="card-right flex flex-col w-2/3 mx-auto justify-between">
                    <div class="flex flex-row">
                        <h3 class="text-3xl lg:text-4xl text-left lg:text-left font-black w-full leading-none lg:leading-normal text-mmablue">
                            Feedback Form
                        </h3>
                    </div>
                    <div class="flex flex-row flex-wrap font-openSans">
                        <div class="flex flex-col flex-wrap w-full">
                            <div class="w-full text-base lg:text-xl mt-4 mb-2 font-extrabold">
                                Medicare Medicaid Advisors welcome any and all feedback. All feedback submitted using
                                this form is anonymous unless you provide us a way to contact you.
                            </div>
                        </div>

                        <form
                            method="POST"
                            id="feedbackForm"
                            name="feedbackForm"
                            class="w-full py-6"
                        >
                            @csrf

                            <input type="hidden" name="u" value="1" />
                            <input type="hidden" name="f" value="1" />
                            <input type="hidden" name="s" />
                            <input type="hidden" name="c" value="0" />
                            <input type="hidden" name="m" value="0" />
                            <input type="hidden" name="act" value="sub" />
                            <input type="hidden" name="v" value="2" />

                            <div class="flex">
                                <div class="flex flex-wrap relative w-full">
                                    <div class="w-full md:w-1/2 flex relative">
                                        <select
                                            id="feedback"
                                            name="field[3]"
                                            class="relative z-10 w-full bg-transparent rounded-sm cursor-pointer appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:border-purple-500"
                                        >
                                            <option value="General Feedback" selected>
                                                General Feedback
                                            </option>
                                            <option value="File A Complaint">
                                                File A Complaint
                                            </option>
                                        </select>

                                        <i id="feedback-icon-select" class="fa fa-caret-down absolute right-0 pt-3 pr-4 text-blue-400 cursor-pointer z-0"></i>
                                    </div>
                                    <div class="w-full md:w-1/2 mt-2 md:mt-0 md:pl-2">
                                        <input
                                            class="rounded-sm w-full bg-white appearance-none border-2 border-gray-300 py-2 pl-4 pr-16 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500"
                                            type="email"
                                            name="email"
                                            placeholder="Type your email"
                                        />
                                    </div>
                                </div>
                            </div>

                            <div class="w-full flex flex-wrap justify-center lg:justify-end">
                                <textarea
                                    rows="10"
                                    name="field[5]"
                                    class="rounded-sm w-full my-2 appearance-none border-2 border-gray-300 py-2 px-4 text-gray-700 text-base leading-tight focus:outline-none focus:bg-white focus:border-purple-500 placeholder-transparent focus:placeholder-gray-500"
                                    placeholder="All feedback is anonymous. Type your comments here. If you’d like a response, include your phone number or email address with your feedback."
                                ></textarea>
                                <button
                                    id="formSubmitButton"
                                    type="submit"
                                    class="w-4/5 sm:w-3/5 lg:w-2/5 mt-2 self-end bg-mmared hover:bg-mmalightblue focus:shadow-outline focus:outline-none text-white hover:text-white font-bold py-3 px-10 rounded-lg"
                                >
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.ready-to-see')
@stop
