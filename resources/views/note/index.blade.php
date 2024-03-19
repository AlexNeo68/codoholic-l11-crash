<x-layout>
    <div class="note-container py-12">
        <a href="" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ($notes as $note)
                <div class="note">
                    
                    <div class="note-body">
                        {{ Str::words($note->note, 30)}}
                    </div>

                    <div class="note-buttons">
                        <a href="" class="note-edit-button">View</a>
                        <a href="" class="note-edit-button">Edit</a>
                        <button class="note-delete-button">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="p-6">

        </div>
    </div>

</x-layout>