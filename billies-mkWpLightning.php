<?php
/*
 * @wordpress-plugin
 * Plugin Name: Billies mk WpLightning
 * Description: Check Sheet for WordPress Saitama Theme -- [insert_billies_mkWpLightning]
 * Version: 0.1
 * Author: Seiichi Nukayama
 * URL: http://www.billies-works.com/
 */
function billies_mk_wplightning_add_files () {
  wp_enqueue_style('css-billies-mkWpLightning', plugins_url('billies_mkWpLightning.css', __FILE__));
  wp_enqueue_script('js-billies-mkWpLightning', plugins_url('billies_mkWpLightning.js', __FILE__), array(), false, true);
}
add_action('wp_enqueue_scripts', 'billies_mk_wplightning_add_files');


function billies_mkWpLightning_form () {

ob_start();
?>
    <div id="billies-mkWpLightning-wrap">
        <h1>WordPress チェック</h1>
        <section class="billies-mkWpLightning-check">
            <p>WordPressのLightningテーマを使ってみよう</p>
            <form id="checkform" name="checkform">
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    パーマリンクを「日付・投稿名」に設定する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    ユーザー名のニックネームを設定する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    テーマに「ligntning」を選択し、有効化する。
                    「外観」－「テーマ」－「新規追加」－「テーマを検索」で「lightning」と入力。
                    「lightning」テーマを「インストール」・「有効化」する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    プラグイン「VK All in One Expantion Unit」をインストールし、有効化する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    プラグイン「WP Multibyte Patch」をインストールし、有効化する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    サイトタイトルを「Florista Lindo」、キャッチフレーズを「市ヶ谷にある花のお店です」とする。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    サイトロゴを「ヘッダーロゴ」の「logo.png」にする。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    キーカラーを「#d85050」、キーカラー（暗）を「#a52e2e」に設定する。
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    スライドショーを設定する。画像は、「ヘッダー画像」フォルダの中の2つの画像を使う。<br>
                    （キャプション・代替テキストは、今回は省略）
                </div>

                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
					「外観」－「ウィジェット」<br>
					「フッターウィジェットエリア１」に「VKプロフィール」を設置。<br>
					プロフィールの内容は、以下。
					<table>
						<tr><th>タイトル</th><td>なし</td></tr>
						<tr><th>プロフィール用画像</th><td>「sample」フォルダの中の「logo」フォルダの「footer_logo.png」</td></tr>
						<tr><th>プロフィールテキスト</th>
						<td>東京都千代田区市ヶ谷<br>TEL: 03-1234-5678<br>FAX: 03-1234-6789</td></tr>
					</table>	
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    投稿記事を新規追加する。<br>
                    <div class="billies-mkWpLightning-item-content">
                        <table>
                            <tr>
                                <th>タイトル</th>
								<td>ホームページをオープンしました</td>
							</tr>
							<tr>
								<th>内容</th>
								<td>ホームページをオープンしました<br>
									ブログなどで更新していきますので、よろしくお願いいたします。</td>
                            </tr>
							<tr>
								<th>パーマリンク</th>
								<td>homepage-open</td>
							</tr>
						</table>	
					</div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    投稿記事を新規追加する。<br>
                    <div class="billies-mkWpLightning-item-content">
                        <table>
							<tr>
								<th>タイトル</th>
								<td>好きな花は・・・やっぱりバラ</td>
							</tr>
                            <tr>
                                <th>本文</th>
								<td>こんにちは。<br
　　　　　　　						>たまに好きな花は何ですかという質問を受けることがあるのですが、私の好きな花は・・・やっぱりバラの花！<br
　　　　　　　						>小さい頃から、バラの花束をプレゼントしてもらうのが夢でした（笑）<br
　　　　　　　						>まだその夢は叶っていませんが(^^;;</td>
                            </tr>
                            <tr>
                                <th>画像</th>
                                <td>「image」フォルダの「IMG9.jpg」<br>
                                    画像サイズ：「中」<br>
                                    リンク設定：リンク先「メディアファイル」<br>
									新しいタブで開く：ＯＮ<br>
									画像の位置；文章の先頭「こんにちは」の上<br>
									画像の配置：「左」を選択</td>
                            </tr>
							<tr>
								<th>パーマリンク</th>
								<td>rose</td>
							</tr>
                        </table>
                    </div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    以下のカテゴリーを追加する。(p101)
                    <div class="billies-mkWpLightning-item-content">
                        <table>
                            <tr>
                                <th>名前</th>
                                <th>スラッグ</th>
								<th>親</th>
                            </tr>
                            <tr>
                                <td>お知らせ</td>
                                <td>news</td>
								<td> - </td>
                            </tr>
                            <tr>
                                <td>新製品</td>
                                <td>newitem</td>
								<td>お知らせ</td>
                            </tr>
                        </table>
						※カテゴリー「未分類」は、名前「情報」、スラッグ「info」に変更。
                    </div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    固定ページを作成する。<br>
                    <div class="billies-mkWpLightning-item-content">
                        <table>
                            <tr>
                                <th>タイトル</th>
                                <td>お店情報</td>
                            </tr>
							<tr>
								<th>画像</th>
								<td>IMG7.jpg （位置は、先頭。配置は、左）</td>
							</tr>
                            <tr>
								<th>内容</th>
								<td>市ヶ谷にある花屋さんです。<br>
									季節の花、イベントの花や葬儀花、観葉植物など取り揃えています。<br>
									どうぞお気軽に足を運んでください。</td>
							</tr>
							<tr>
								<th>パーマリンク</th>
								<td>shop-info</td>
							</tr>
                        </table>
                    </div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    以下のようにメニューを作成する。(p161)<br>
                    <div class="billies-mkWpLightning-item-content">
                        メニューの名前は、「メインメニュー」。<br>
                        メニューの位置は、「Header Navigation」
						<table>
							<tr><th>項目</th><th>（説明）</th></tr>
							<tr><td>ホーム</td><td>HOME</td></tr>
							<tr><td>お店情報</td><td>Shop Info</td></tr>
							<tr><td>アクセス（副項目）</td><td></td></tr>
							<tr><td>ギャラリー</td><td>Gallery</td></tr>
							<tr><td>スクール</td><td>School</td></tr>
							<tr><td>お問い合わせ</td><td>Infomation</td></tr>
						</table>
						<p>※「アクセス」「ギャラリー」「スクール」「お問い合わせ」の固定ページを作っておく。</p>
						<p>※（説明）は、画面右上の「表示オプション」を開いて、「説明」にチェック。</p>

                    </div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    固定ページを作成する。<br>
                    <div class="billies-mkWpLightning-item-content">
                        <table>
                            <tr>
                                <th>タイトル</th>
                                <td>サイトマップ</td>
                            </tr>
							<tr>
								<th>内容</th>
								<td>なし</td>
							</tr>
                            <tr>
								<th>パーマリンク</th>
								<td>sitemap</td>
							</tr>
							<tr>
								<th>挿入アイテムの設定</th>	
								<td>「HTMLサイトマップの表示」にチェック</td>
							</tr>
                        </table>
                    </div>
                </div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
                    メニューを新規作成する。<br>
                    <div class="billies-mkWpLightning-item-content">
						<table>
							<tr>
								<th>メニュー名</th>
								<td>フッターメニュー</td>
							</tr>
							<tr>
								<th>メニューの位置</th>
								<td>Footer Navigation</td>
							</tr>
							<tr>
								<th>メニューの項目</th>
								<td>サイトマップ</td>
							</tr>
						</table>
					</div>
				</div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
					「外観」－「ウィジェット」にて以下の作業をおこなう。<br>
                    <div class="billies-mkWpLightning-item-content">
						ウィジェット「検索」「最近の投稿」「カテゴリー」を「サイドバー（トップページ）」に追加。
					</div>
				</div>
                <div class="billies-mkWpLightning-item">
                    <input type="checkbox" name="chk"  class="billies-mkWpLightning-item-chkClass">
					「外観」－「カスタマイズ」にて、「PR Blockを表示する」のチェックをはずして「公開」。。<br>
                    <div class="billies-mkWpLightning-item-content">
						「外観」ー「カスタマイズ」にて、「VK 3PRエリア」を「トップページコンテンツエリア上部」とする。<br>
						<table>
						　　<caption>「設定画面」の指定</caption>
							<tr>
								<th rowspan="3">3PRエリア設定1</th>
								<th>タイトル</th>
								<td>「お店情報」</td>
                            </tr>
                            <tr>
								<th>画像</th>
								<td>「IMG10.jpg」スマートフォン用「IMG10_SP.jpg」</td>
                            </tr>
                            <tr>
								<th>概要となるテキスト</th>
								<td>「当店の住所、地図はこちらに掲載しています。ご来店をお待ちしています。」<br>
								リンク先ページのURLは、お店情報のページのURL。</td>
                            </tr>
                            <tr>
								<th rowspan="3">3PRエリア設定2</th>
								<th>タイトル</th>
								<td>「ギャラリー」</td>
                            </tr>
                            <tr>
								<th>画像</th>
								<td>「IMG11.jpg」スマートフォン用「IMG11_SP.jpg」</td>
							</tr>
							<tr>
								<th>概要となるテキスト</th>
								<td>「誕生日や結婚記念日のブーケやウェディングのアレンジメントなど心をこめてお作りいたします。」<br>
								リンク先ページのURLは、ギャラリーのページのURL.</td>
                            </tr>
                            <tr>
								<th rowspan="3">3PRエリア設定3</th>
								<th>タイトル</th>
								<td>「スクール」</td>
                            </tr>
                            <tr>
								<th>画像</th>
								<td>「IMG12.jpg」スマートフォン用「IMG12_SP.jpg」</td>
							</tr>
							<tr>
								<th>概要となるテキスト</th>
								<td>「あなたもフラワーアレンジメントを学んでみませんか？体験コースも開催中です。」<br>
								リンク先ページのURLは、スクールのページのURL</td>
                            </tr>
                        </table>
					</div>
				</div>
            </form>
        </section>
		<div id="billies-mkWpLightning-setting-btn">
			<img src="<?php echo plugins_url('clover.png', __FILE__); ?>" alt="menu">
		</div>
		<div id="billies-mkWpLightning-menu-box">
			<div class="btn">
				<button type="button" id="ok-btn">ＯＫ</button>
			</div>
			<div class="btn">
				<button type="button" id="save-btn">保存</button>
			</div>
			<div class="btn">
				<button type="button" id="read-btn">読込</button>
			</div>
			<div class="btn">
				<button type="button" id="reset-btn">初期化</button>
			</div>
		</div><!-- menu-box -->
    </div>
<?php
return ob_get_clean();
}
add_shortcode('insert_billies_mkWpLightning', 'billies_mkWpLightning_form');

