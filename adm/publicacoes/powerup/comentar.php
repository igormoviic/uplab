<div class="comment-respond" id="respond">
    <h3 class="comment-reply-title" id="reply-title">Leave a Reply</h3>
    <form novalidate="" class="comment-form" id="commentform" method="post" action="#">
        <p class="comment-notes">
            <span id="email-notes">Your email address will not be published.</span> Required fields are marked
            <span class="required">*</span>
        </p>
        <p class="comment-form-comment">
            <label for="comment">Comment</label>
            <textarea required="required" maxlength="65525" rows="8" cols="45" name="comment" id="comment"></textarea>
        </p>
        <p class="comment-form-author">
            <label for="author">Name
                <span class="required">*</span>
            </label>
            <input type="text" required="required" aria-required="true" maxlength="245" size="30" value="" name="author" id="author">
        </p>
        <p class="comment-form-email">
            <label for="email">Email
                <span class="required">*</span>
            </label>
            <input type="email" required="required" aria-required="true" aria-describedby="email-notes" maxlength="100" size="30" value="" name="email" id="email">
        </p>
        <p class="comment-form-url">
            <label for="url">Website</label>
            <input type="url" maxlength="200" size="30" value="" name="url" id="url">
        </p>
        <p class="form-submit">
            <input type="submit" value="Post Comment" class="submit">
        </p>
    </form>
</div>