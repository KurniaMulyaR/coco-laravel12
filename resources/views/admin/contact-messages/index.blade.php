@extends('layouts.coco')

@section('title', '| Contact Messages')

@section('content')
<div style="padding: 2rem;">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom: 1rem;">
        <h1 style="margin:0;">Contact Messages</h1>
    </div>

    @if(session('success'))
        <div style="margin-bottom: 1rem; padding: .75rem 1rem; border:1px solid #c7f3d0; background:#eafaf0; border-radius:.5rem;">
            {{ session('success') }}
        </div>
    @endif

    <table style="width:100%; border-collapse: collapse;">
        <thead>
            <tr>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">#</th>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">Name</th>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">Email</th>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">Phone</th>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">Message</th>
                <th style="text-align:left; border-bottom:1px solid #ddd; padding:.75rem;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $idx => $msg)
                <tr>
                    <td style="border-bottom:1px solid #eee; padding:.75rem;">{{ $messages->firstItem() + $idx }}</td>
                    <td style="border-bottom:1px solid #eee; padding:.75rem;">{{ $msg->name }}</td>
                    <td style="border-bottom:1px solid #eee; padding:.75rem;">{{ $msg->email }}</td>
                    <td style="border-bottom:1px solid #eee; padding:.75rem;">{{ $msg->phone }}</td>
                    <td style="border-bottom:1px solid #eee; padding:.75rem; max-width: 420px;">{{ \Illuminate\Support\Str::limit($msg->message, 120) }}</td>

                    <td style="border-bottom:1px solid #eee; padding:.75rem;">
                        <a href="{{ route('contact-messages.edit', $msg) }}" style="margin-right:.5rem;">Edit</a>
                        <form action="{{ route('contact-messages.destroy', $msg) }}" method="POST" style="display:inline;" onsubmit="return confirm('Hapus message ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="background:transparent; border:0; color:#b91c1c; cursor:pointer;">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="6" style="padding: 1rem;">Belum ada pesan.</td></tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 1rem;">
        {{ $messages->links() }}
    </div>
</div>
@endsection

