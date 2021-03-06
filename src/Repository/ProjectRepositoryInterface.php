<?php

namespace BestIt\CommercetoolsODM\Repository;

use BestIt\CommercetoolsODM\Exception\ResponseException;
use Commercetools\Core\Model\Project\Project;

/**
 * Class ProjectRepository
 * @author blange <lange@bestit-online.de>
 * @package BestIt\CommercetoolsODM
 * @subpackage Repository
 * @version $id$
 */
interface ProjectRepositoryInterface
{
    /**
     * Returns the info for the actual projcet.
     * @return Project
     * @throws ResponseException
     */
    public function getInfoForActualProject(): Project;
}
