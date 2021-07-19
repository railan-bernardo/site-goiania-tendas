<?php


namespace Source\App\Admin;
use Source\Models\Banner;
use Source\Models\Slide;
use Source\Support\Pager;
use Source\Support\Thumb;
use Source\Support\Upload;

/**
 * Class Banner
 * @package Source\App\Admin
 */
class Pub extends Admin
{

    /**
     * Banner constructor.
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param array|null $data
     */
    public function home(?array $data): void
    {



     

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Banner",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/banner/home", [
            "app" => "slide/home",
            "head" => $head,
            "slide" => (new Banner())->find()->fetch(true)

        ]);
    }

    /**
     * @param array|null $data
     * @throws \Exception
     */
    public function posts(?array $data): void
    {

        //create
        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);


            $postCreate = new Banner();
            $postCreate->name = $data["name"];

            //upload cover
            if (!empty($_FILES["cover"])) {
                $files = $_FILES["cover"];
                $upload = new Upload();
                $image = $upload->image($files, $postCreate->name);

                if (!$image) {
                    $json["message"] = $upload->message()->render();
                    echo json_encode($json);
                    return;
                }

                $postCreate->cover = $image;
            }


            if (!$postCreate->save()) {
                $json["message"] = $postCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Banner publicado com sucesso...")->flash();
            $json["redirect"] = url("/admin/banner/home");

            echo json_encode($json);
            return;
        }


        //delete
        if (!empty($data["action"]) && $data["action"] == "delete") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $postDelete = (new Banner())->findById($data["post_id"]);

            if (!$postDelete) {
                $this->message->error("Você tentou excluir um banner que não existe ou já foi removido")->flash();
                echo json_encode(["reload" => true]);
                return;
            }

            if ($postDelete->cover && file_exists(__DIR__ . "/../../../" . CONF_UPLOAD_DIR . "/{$postDelete->cover}")) {
                unlink(__DIR__ . "/../../../" . CONF_UPLOAD_DIR . "/{$postDelete->cover}");
                (new Thumb())->flush($postDelete->cover);
            }

            $postDelete->destroy();
            $this->message->success("O banner foi excluído com sucesso...")->flash();

            echo json_encode(["reload" => true]);
            return;
        }


        $head = $this->seo->render(
            CONF_SITE_NAME . " | " .  "Novo Banner",
            CONF_SITE_DESC,
            url("/admin"),
            url("/admin/assets/images/image.jpg"),
            false
        );

        echo $this->view->render("widgets/banner/post", [
            "app" => "banner/post",
            "head" => $head
        ]);
    }

}