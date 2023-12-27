<article id="post-<?php the_ID();?>" class="news_wrapper">
    <div class="news-time" datetime="<?php the_time('Y-m-d'); ?>">
        <?php the_time('Y.m.d'); ?>
    </div>
    <div class="newsbox">
        <div class="newsbox__cat">
            <?php the_category(); ?>
        </div>
        <div class="newsbox__content">
            <ul>
                <li>
                    <dl>
                        <dt>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </dt>
                        <dd>
                            <?php the_content(); ?>
                            <p><a href="<?php the_permalink(); ?>">[続きを読む]</a></p>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</article>