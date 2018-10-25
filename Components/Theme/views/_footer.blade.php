<footer class="footer-tfc">
    <div class="inner-footer">
        @if($config->get('useCopyright') !== 'N')
            @if(trim($config->get('copyrightContent')))
                <small>{!! $config->get('copyrightContent') !!}</small>
            @else
                Powered by <a href="https://www.xpressengine.io/" target="_blank">XpressEngine</a>.
            @endif
        @endif
        <div class="area_language reset-button">
            <button type="button">
                <span class="icon_lang_korea">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span></span><span class="blind">대한민국</span>
            </button>
            <button type="button">
                <span class="icon_lang_unstates">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span><span class="path35"></span><span class="path36"></span><span class="path37"></span><span class="path38"></span><span class="path39"></span><span class="path40"></span><span class="path41"></span><span class="path42"></span><span class="path43"></span><span class="path44"></span><span class="path45"></span><span class="path46"></span><span class="path47"></span><span class="path48"></span><span class="path49"></span><span class="path50"></span>
                </span>
                <span class="blind">미국</span>
            </button>
            <button type="button">
                <span class="icon_lang_japan">
                    <span class="path1"></span><span class="path2"></span>
                </span>
                <span class="blind">일본</span>
            </button>
        </div>
    </div>
</footer>
