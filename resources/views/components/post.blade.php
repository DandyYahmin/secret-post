<div class='fixed bottom-10 right-10 z-10 items-center'>
    <a href="#post" class='border border-current rounded-full p-3 text-3xl bg-black'>➕</a>
</div>
<div class='target:w-auto target:h-auto grid grid-cols-1 gap-3 w-0 h-0 overflow-hidden fixed top-0 target:bottom-0 left-0 target:right-0 z-20' id='post' style='background: rgba(0,0,0,.5)'>
    <div class='bg-white col-span-3 my-40 mx-12 lg:mx-80 text-left h-fit p-3 pl-4 border-current border-2 rounded-3xl'>
        <div class='flex justify-between'>
            <p class='text-2xl'>Post a secret thread</p>
            <a href="#">❌</a>
        </div>
        <br>
        <form action="/post" method="post">
            @csrf
            @error('thread')
                <p class='text-red-700'>At least write 1 character lmao🤓</p>
            @enderror
            <textarea name="thread" cols="30" rows="10" class='border border-current w-full resize-none' placeholder='write here!!!'></textarea>
            <button type="submit" class='border border-current p-3 bg-lime-600 rounded-3xl text-white'>Post anonymously👀</button>
        </form>
    </div>
</div>