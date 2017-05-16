<?php
namespace Transsmart\Model\Action;

class Action
{
    private $action = 'getLabelAndDocs';
    private $version = '2.0';

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @param string $action
     *
     * @return Action
     */
    public function setAction(string $action): Action
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return Action
     */
    public function setVersion(string $version): Action
    {
        $this->version = $version;

        return $this;
    }


}