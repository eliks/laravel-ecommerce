@extends('layouts.user')

@section('breadcrumb')
<div class="flex">
    <div>
      <a href="{{ route('home') }}" class="text-gray-700" title="home">
        {{ __('Home') }} >>
      </a>
    </div>
    <div class="ml-1">
      <a href="{{ route('account.dashboard') }}" class="text-gray-700" title="user dashboard">
        {{ __('User Dashboard') }} >>
      </a>
    </div>
    
    <div class="ml-1 text-gray-700">
        {{ __('Upload') }}
    </div>
</div>
@endsection


@section('content')
<div class="flex">
    <div class="w-full">
        <account-upload inline-template>
        <div>
            <form method="post" action="{{ route('account.upload.image') }}" enctype="multipart/form-data">
                @csrf
                <div class="mt-3">
                    <label class="block w-full mb-3" for="user-image">
                        {{ __('avored.fields.image') }}
                    </label>
                    <input id="user-image" class="block border w-full" type="file" name="file" />
                    @if ($errors->has('file'))
                        <p>
                            {{ $errors->first('file') }}
                        </p>
                    @endif
                </div>
                
                <div class="mt-3 py-3">
                    <button type="submit"
                        class="px-6 py-3 font-semibold leading-7  text-white hover:text-white bg-red-600 rounded hover:bg-red-700"
                    >   
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 inline-flex w-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M0 2C0 .9.9 0 2 0h14l4 4v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5 0v6h10V2H5zm6 1h3v4h-3V3z"/>
                        </svg>
                        <span class="ml-3">{{ __('avored.btn.save') }}</span>
                    </button>
                    
                    <a href="{{ route('account.dashboard') }}"
                        class="px-6 py-3 font-semibold inline-block text-white leading-7 hover:text-white bg-gray-500 rounded hover:bg-gray-600">
                        <span class="leading-7">
                            {{ __('avored.btn.cancel') }}
                        </span>
                    </a>
                </div>
                
                  
                
            </form>
            </div>
        </address-upload>
    </div>
</div>
@endsection
