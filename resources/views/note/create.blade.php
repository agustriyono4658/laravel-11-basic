<x-app-layout>
   <div class="note-contrainer single-note">
      <h1 class="text-3xl py-12">Create New Note</h1>
      <form action="{{ route('note.store') }}" method="post" class="note">
         @csrf
         <textarea name="note" id="" cols="30" rows="10" class="note-body" placeholder="Enter your note here"></textarea>
         <div class="note-buttons">
            <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
            <button class="note-submit-button">Submit</button>
         </div>
      </form>
   </div>
</x-app-layout>
