<?php
/*
 * Sometime too hot the eye of heaven shines
 */

namespace App\Repositories\Contracts;


interface RepositoryEventInterface
{
    function onCreating();
    function onCreated();

    function onUpdating();
    function onUpdated();

    function onSaving();
    function onSaved();

    function onDeleting();
    function onDeleted();
}