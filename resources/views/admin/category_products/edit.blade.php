<x-admin.wrapper>
    <x-slot name="title">
        {{ Breadcrumbs::render('categoryProducts.edit',$categoryProducts) }}
    </x-slot>

    <div>
        <x-admin.breadcrumb href="{{route('categoryProducts.index')}}" title="{{ __('Update categoryProducts') }}"></x-admin.breadcrumb>
        <x-admin.form.errors />
    </div>
    <div class="w-full py-2 bg-white overflow-hidden">

        <form method="POST" action="{{ route('categoryProducts.update', $categoryProducts->id) }}">
        @csrf
        @method('PUT')

            <div class="py-2">
                <x-admin.form.label for="name" class="{{$errors->has('name') ? 'text-red-400' : ''}}">{{ __('Name') }}</x-admin.form.label>

                <x-admin.form.input id="name" class="{{$errors->has('name') ? 'border-red-400' : ''}}"
                                type="text"
                                name="name"
                                value="{{ old('name', $categoryProducts->name) }}"
                                />
            </div>


            <div class="flex justify-end mt-4">
                <x-admin.form.button>{{ __('Update') }}</x-admin.form.button>
            </div>
        </form>
    </div>
</x-admin.wrapper>
