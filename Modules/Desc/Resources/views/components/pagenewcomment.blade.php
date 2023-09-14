<div class="p-2 page-new-comment bg-white rounded-2 shadow my-font-ISM my-color-b-600">
    <p align="right" class="my-f-14">نظر جدید</p>
    <hr>
    <form dir="rtl" action="{{route('more.new.comment', ['post_id' => $postId])}}" method="POST" class=" my-f-12">
        @csrf
        <div class="mb-3">
            <label for="input_title" class="form-label">موضوع نظر</label>
            <input type="text" class="form-control" id="input_title" name="title">
        </div>
        @error('title')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        <div class="mb-3">
            <label for="input_text" class="form-label">متن نظر</label>
            <input type="text" class="form-control" id="input_text" name="body">
        </div>
        @error('body')
            <div class="alert alert-danger" role="alert">
                {{$message}}
            </div>
        @enderror
        <div>
            <button type="submit" class="btn btn-danger opacity-75 mx-2 btn-sm">ارسال</button>
            <button type="button" class="btn btn-outline-secondary btn-sm" @click="closePageNewComment()">بستن</button>
        </div>
    </form>
</div>
<div class="w-100 h-100 my-pos-fix bg-dark opacity-25 top-0 right-0 p-0 m-0 page-hide"></div>
