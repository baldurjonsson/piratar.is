﻿<?php
    /*
    Template Name: Alþingiskosningar
    */
get_header(); ?>

    <div>
        <h3>Stefnan</h3>
    </div>
    <div>
        <hr />
        <h3>Carolina fund banner</h3>
        <hr />
    </div>

    <div class="container">
        <h3>Topp 5 úr kjördæmum</h3>
        <div class="row">
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('nordvesturbox', 42); ?>
                    aaaaaaaaaaaaaa
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('sudurbox', 42); ?>
                    bbbbbbbbb
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('capitalbox', 42); ?>
                    cccccccc
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('forsidubox_4', 42); ?>
                    ddddddd
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('forsidubox_5', 42); ?>
                    eeeeeeeee
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple">
                    <?php the_field('forsidubox_6', 42); ?>
                    ffffffff
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center mb30">
                <a href="#" class="btn btn-primary">Sja alla</a>
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-6">
                <h3>Píratar í fréttum</h3>
                <?php the_content(); ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bgpurple">
                            aa
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bgpurple">
                            bb
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="bgpurple">
                            cc
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bgpurple">
                            dd
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="bgpurple text-center">
                    <h2 class="white mb30">Hvernig á að kjósa?</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple text-center">
                    <h2 class="white">Fyrir fjölmiðla</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bgpurple text-center">
                    <h2 class="white mb30">Taka þátt</h2>
                    <button type="submit" class="btn btn-primary">Smella</button>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
<?php get_footer(); ?>
