@extends('layouts.coco')

@section('title', '| Create Contact Message')

@section('content')
<div style="padding: 2rem;">
    <h1 style="margin:0 0 1rem 0;">Create Contact Message</h1>

    @if($errors->any())
        <div style="margin-bottom: 1rem; padding: .75rem 1rem; border:1px solid #fecaca; background:#fff1f2; border-radius:.5rem;">
            <ul style="margin:0; padding-left: 1.25rem;">
                @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact-messages.store') }}" method="POST">
        @csrf

        <div style="display:grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div>
                <label>Name</label>
                <input name="name" value="{{ old('name') }}" required style="width:100%; padding:.65rem;" />
            </div>
            <div>
                <label>Email</label>
                <input name="email" type="email" value="{{ old('email') }}" required style="width:100%; padding:.65rem;" />
            </div>
            <div>
                <label>Phone</label>
                <input name="phone" value="{{ old('phone') }}" style="width:100%; padding:.65rem;" />
            </div>
        </div>

        <div style="margin-top: 1rem;">
            <label>Message</label>
            <textarea name="message" required rows="6" style="width:100%; padding:.65rem;">{{ old('message') }}</textarea>
        </div>

        <div style="margin-top: 1.25rem; display:flex; gap: .75rem;">
            <button type="submit" style="padding:.7rem 1rem; background:#1a4a5c; color:white; border:0; border-radius:.5rem; cursor:pointer;">Save</button>
            <a href="{{ route('contact-messages.index') }}" style="padding:.7rem 1rem; border:1px solid #ddd; border-radius:.5rem;">Back</a>
        </div>
    </form>
</div>
@endsection

