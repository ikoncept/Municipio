<?php

#if (is_single() && comments_open() && get_option('comment_registration') == 0 || is_single() &&
# comments_open() && is_user_logged_in()) {

    $key = defined('G_RECAPTCHA_KEY') ? G_RECAPTCHA_KEY : '';
    $reCaptcha = (!is_user_logged_in(
        0)) ? '<div class="g-recaptcha" data-sitekey="' . $key . '"></div></div>' : '';

    ob_start();
    ob_get_clean();

    $current_user = wp_get_current_user();

    $args = array(
        'id_form'           => 'commentform',
        'class_form'        => 'c-form',
        'id_submit'         => 'submit',
        'class_submit'      => 'c-button c-button__filled c-button__filled--primary c-button--md
        u-float--right u-margin__bottom--3',
        'name_submit'       => 'submit',
        'submit_button'     => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
        'format'            => 'html5',
        'cancel_reply_link' => __( 'Cancel reply' ),
        'comment_field'     =>  $reCaptcha. '<div class="c-textarea"><textarea id="comment"
        name="comment" placeholder="'.__
            ('Comment
        text','text-domain').'" aria-required="true">' .'</textarea></div>'
    );


    comment_form( $args );

?>


@foreach($comments as $comment)
    @if($comment->comment_parent == 0)

        @if ($comment->comment_author_email)

            @php

                $userName = (get_user_by('email', $comment->comment_author_email)) ?
                    (get_user_by('email', $comment->comment_author_email)->data->user_nicename) : '';
                $userAvatar = (get_user_by('email',$comment->comment_author_email) !== null &&
                    !empty(get_user_by('email',$comment->comment_author_email)))
                    ? $userAvatar = get_avatar_url(get_user_by('email', $comment->comment_author_email)->data->ID ) : '';

            @endphp

        @endif

        <div class="comment byuser comment-author-johan bypostauthor even thread-even depth-1
        parent" id="div-comment-{{$comment->comment_ID}}">
            <a name="comment-{{$comment->comment_ID}}"></a>
            {{-- Comment Thread --}}
            @comment([
                'author' => $userName,
                'author_url' => 'mailto:'.$comment->comment_author_email,
                'author_image' => $userAvatar,
                'text' => get_comment_text($comment->comment_ID),
                'icon' => 'face',
                'date' => date('Y-m-d \k\l\. H:i', strtotime($comment->comment_date)),
                'classList' => ['comment-'.$comment->comment_ID, 'comment-reply-link']
            ])

                @if (\Municipio\Helper\Hash::short(\Municipio\Helper\Likes::likeButton
                        ($comment->comment_ID)) !== null )
                    <span class="like">
                        {!! \Municipio\Helper\Hash::short(\Municipio\Helper\Likes::likeButton
                        ($comment->comment_ID)) !!}
                    </span>
                @endif

            @endcomment
        </div>



        @if (is_user_logged_in())

            <div class="u-padding__top--1 u-padding__bottom--3 reply">
                @button([
                    'icon' => 'reply',
                    'reversePositions' => true,
                    'style' => 'basic',
                    'color' => 'secondary',
                    'text' => __('Reply', 'municipio'),
                    'componentElement' => 'div',
                    'attributeList' => [
                        'data-commentid' => $comment->comment_ID,
                        'data-postid' => $post->id,
                        'data-belowelement' => 'div-comment-'.$comment->comment_ID,
                        'data-respondelement' => 'respond',
                        'rev' => 'nofollow',
                        'js-toggle-trigger' => 'hide-reply-'.$comment->comment_ID,
                        'js-toggle-item' => 'hide-reply-'.$comment->comment_ID,
                        'js-toggle-class' => 'u-display--none'
                    ],
                    'classList' => ['u-float--right', 'comment-reply-link']
                ])
                @endbutton
            </div>
        @endif

        @php
            $answers = get_comments(array('parent' => $comment->comment_ID, 'order' => 'asc'));
        @endphp

        {{-- COMMENTS ANSWERS --}}
        @if (isset($answers) && $answers)
            @foreach($answers as $answer)

                <a name="comment-{{$answer->comment_ID}}"></a>

                @if (isset($authorPages) && $authorPages == true && email_exists($answer->comment_author_email) !== false)
                    @php
                        $displayNameAnswer = get_user_by('email', $answer->comment_author_email);
                    @endphp
                @else

                    @php

                        $displayNameAnswer = (get_user_by('email', $answer->comment_author_email)) ?
                            (get_user_by('email', $answer->comment_author_email)->data->user_nicename) : '';
                        $userAvatarAnswer = (get_user_by('email',$answer->comment_author_email) !== null &&
                            !empty(get_user_by('email',$answer->comment_author_email)))
                            ? $userAvatar = get_avatar_url(get_user_by('email', $answer->comment_author_email)->data->ID ) : '';

                    @endphp

                @endif

                    @comment([
                        'author' => $displayNameAnswer,
                        'author_url' => $answer->comment_author_email,
                        'author_image' => $userAvatarAnswer,
                        'text' => get_comment_text($answer->comment_ID),
                        'icon' => 'face',
                        'date' => date('Y-m-d \k\l\. H:i', strtotime($answer->comment_date)),
                        'is_reply' => true
                    ])

                        @if (\Municipio\Helper\Hash::short(\Municipio\Helper\Likes::likeButton($answer->comment_ID)) !== null )
                            <span class="like">
                                {!! \Municipio\Helper\Hash::short(\Municipio\Helper\Likes::likeButton
                                ($answer->comment_ID)) !!}
                            </span>
                        @endif

                    @endcomment

            @endforeach
        @endif

    @endif
@endforeach