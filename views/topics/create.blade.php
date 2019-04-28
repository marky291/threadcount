@extends('grid.two-column')

@section('content')
    <div class="markdown mb-6 mx-auto border-l-4 border-blue pl-3">
        <h3 class="text-blue">Topic Creator</h3>
        <div class="text-l text-grey-dark mb-4">
            You are an admin, you have control. (Apart from the color, that's CSS)
        </div>
    </div>

    <form class="w-full" id="create-thread-form" method="post" action="/topics/create">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-4">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                    Name
                </label>
                <input name="name" class="appearance-none block w-full bg-grey-lighter text-grey-darker rounded py-3 px-4 border border-grey-lighter leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-first-name" type="text" placeholder="The name of the topic">
            </div>
            <div class="w-full px-3 mb-4">
                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                    Description
                </label>
                <input name="description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" id="" cols="30" rows="10" placeholder="Describe the new topic"></input>
            </div>
        </div>
        <div class="flex items-center justify-between float-right">
            <button id="cancel-button" class="text-xs bg-white text-blue w-full hover:bg-blue-dark border-blue-light border hover:text-white font-bold py-2 px-4 rounded-l">
                Cancel
            </button>
            <button class="text-xs bg-blue-light w-full hover:bg-blue-dark text-white font-bold border border-blue-light py-2 px-4 rounded-r" type="submit">
                Generate
            </button>
        </div>
    </form>

    @push('scripts')
        <script>
            $("#cancel-button").click(function(event) {
                event.preventDefault();
               window.location.replace("/"); // return to homepage;
            });

            $("#create-thread-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 5,
                        maxlength: 35,
                    },
                    description: {
                        required: true,
                        minlength: 15,
                        maxlength: 255,
                    }
                }
            });
        </script>
    @endpush
@endsection