<div class="container">
    <div
        class="section"
        id="sponsors"
    >
        <div class="row hide">
            <div class="col s12 m12">
                <div class="icon-block">
                    <h3 class="center font-blue"><strong>Patrocinadores e Apoios</strong></h3>
                    <h5 class="center font-blue">Quem torna isso possível?</h5>
                </div>
            </div>
        </div>

        <div class="row hide">
            <div class="col s12 m12">
                <div class="card">
                    <div class="card-content white-text">
                        <span class="card-title font-blue"><strong>Patrocínio Rapadura Preta</strong></span>
                        <hr />
                        <p class="font-blue">Saiba como a sua empresa pode ajudar-nos a realizar um evento fantástico.
                        </p>
                    </div>
                    <div class="card-action font-blue">
                        <a
                            class="waves-effect waves-light btn btn-blue"
                            target="_blank"
                            href="http://conference.phpcomrapadura.org/assets/files/midia-kit-conference.pdf"
                        >
                            <i class="fa fa-plus-circle"></i> Saiba mais
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row hide">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content white-text">
                        <span class="card-title font-blue"><strong>Patrocínio Rapadura de castanha</strong></span>
                        <hr />
                        <p class="font-blue">Saiba como sua empresa pode nos ajudar a realizar um evento arretado.</p>
                    </div>
                    <div class="card-action font-blue">
                        <a
                            class="waves-effect waves-light btn btn-blue"
                            target="_blank"
                            href="http://conference.phpcomrapadura.org/assets/files/midia-kit-conference.pdf"
                        >
                            <i class="fa fa-plus-circle"></i> Saiba mais
                        </a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card">
                    <div class="card-content white-text">
                        <span class="card-title font-blue"><strong>Patrocínio Rapadura batida</strong></span>
                        <hr />
                        <p class="font-blue">Saiba como a sua empresa pode ajudar-nos a realizar um evento jóiado.</p>
                    </div>
                    <div class="card-action font-blue">
                        <a
                            class="waves-effect waves-light btn btn-blue"
                            target="_blank"
                            href="http://conference.phpcomrapadura.org/assets/files/midia-kit-conference.pdf"
                        >
                            <i class="fa fa-plus-circle"></i> Saiba mais
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div>
                <span class="card-title font-blue"><strong>Patrocínio</strong></span>
                <hr>
            </div>
            <?php
            foreach (SPONSORS as $SPONSOR) {
                ?>
                <div
                    class="col <?php
                    echo $SPONSOR['sizes']; ?>"
                >
                    <div class="card">
                        <div class="card-content white-text">
                            <div class="center">
                                <br>
                                <a
                                    target="_blank"
                                    href="<?php
                                    echo $SPONSOR['home']; ?>"
                                    class="site-logo-container"
                                    rel="home"
                                >
                                    <picture class="logo-arretado">
                                        <source
                                            srcset="<?php
                                            echo $SPONSOR['logo']; ?>"
                                            type="image/webp"
                                        >
                                        <img
                                            alt="<?php
                                            echo $SPONSOR['alt']; ?>"
                                            data-src="<?php
                                            echo $SPONSOR['logo']; ?>"
                                            class="default-logo webpexpress-processed ls-is-cached lazyloaded"
                                            src="<?php
                                            echo $SPONSOR['logo']; ?>"
                                        >
                                    </picture>
                                </a>
                            </div>

                        </div>
                        <div class="card-action center">
                            <a
                                class="blue-text text-darken-4"
                                title="website"
                                target="_blank"
                                href="<?php
                                echo $SPONSOR['social']['website']; ?>"
                            ><i
                                    class="fa fa-globe fa-3x"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <a
                                class="blue-text text-darken-4"
                                title="instagram"
                                target="_blank"
                                href="<?php
                                echo $SPONSOR['social']['instagram']; ?>"
                            ><i
                                    class="fa fa-instagram fa-3x"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="row">
            <div>
                <span class="card-title font-blue"><strong>Apoio Institucional</strong></span>
                <hr>
            </div>
            <?php
            foreach (SUPPORTERS as $SUPPORTER) {
                ?>
                <div
                    class="col <?php
                    echo $SUPPORTER['sizes']; ?>"
                >
                    <div class="card">
                        <div class="card-content white-text">
                            <div class="center">
                                <br>
                                <a
                                    target="_blank"
                                    href="<?php
                                    echo $SUPPORTER['home']; ?>"
                                    class="site-logo-container"
                                    rel="home"
                                >
                                    <picture class="logo-arretado">
                                        <source
                                            srcset="<?php
                                            echo $SUPPORTER['logo']; ?>"
                                            type="image/webp"
                                        >
                                        <img
                                            alt="<?php
                                            echo $SUPPORTER['alt']; ?>"
                                            data-src="<?php
                                            echo $SUPPORTER['logo']; ?>"
                                            class="default-logo webpexpress-processed ls-is-cached lazyloaded"
                                            src="<?php
                                            echo $SUPPORTER['logo']; ?>"
                                        >
                                    </picture>
                                </a>
                            </div>

                        </div>
                        <div class="card-action center">
                            <a
                                class="blue-text text-darken-4"
                                title="website"
                                target="_blank"
                                href="<?php
                                echo $SUPPORTER['social']['website']; ?>"
                            ><i
                                    class="fa fa-globe fa-3x"
                                    aria-hidden="true"
                                ></i>
                            </a>
                            <a
                                class="blue-text text-darken-4"
                                title="instagram"
                                target="_blank"
                                href="<?php
                                echo $SUPPORTER['social']['instagram']; ?>"
                            ><i
                                    class="fa fa-instagram fa-3x"
                                    aria-hidden="true"
                                ></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<style>
.logo-arretado {
  display: inline-block;
  border-radius: 8px;
  padding: 10px;
}

.logo-arretado img {
  width: 100%;
  height: auto;
}
</style>
