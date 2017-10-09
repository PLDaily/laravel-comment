<?php
/*
 * Sometime too hot the eye of heaven shines
 */

namespace App\Repositories\Contracts;


interface Transformable
{
    /**
     * @param PresenterInterface $presenter
     *
     * @return mixed
     */
    public function setPresenter(PresenterInterface $presenter);

    /**
     * @return mixed
     */
    public function transform();
}