index du module users

<?php var_dump($$controller->$actionName($db)); ?>

<table>
    <tr>
        <td>
            Nom:
        </td>
        <td>
            <?= $$controller->$actionName($db)['user']->getName(); ?>
        </td>
    </tr>
    <tr>
        <td>
            Prénom:
        </td>
        <td>
            <?= $$controller->$actionName($db)['user']->getSurname(); ?>
        </td>
    </tr>
    <tr>
        <td>
            Email:
        </td>
        <td>
            <?= $$controller->$actionName($db)['user']->getEmail(); ?>
        </td>
    </tr>
    <tr>
        <td>
            Phone:
        </td>
        <td>
            <?= $$controller->$actionName($db)['user']->getPhone(); ?>
        </td>
    </tr>
    <tr>
        <td>
            cv:
        </td>
        <td>
            <?= $$controller->$actionName($db)['user']->getCv(); ?>
        </td>
    </tr>
</table>