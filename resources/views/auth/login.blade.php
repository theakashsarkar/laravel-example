<x-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/login" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name"/>
        <x-forms.input label="password" name="password" type="password" />
        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
