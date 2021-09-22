<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2019 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Cloud\Asset\V1;

/**
 * Asset service definition.
 */
class AssetServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Exports assets with time and resource types to a given Cloud Storage
     * location/BigQuery table. For Cloud Storage location destinations, the
     * output format is newline-delimited JSON. Each line represents a
     * [google.cloud.asset.v1.Asset][google.cloud.asset.v1.Asset] in the JSON
     * format; for BigQuery table destinations, the output table stores the fields
     * in asset proto as columns. This API implements the
     * [google.longrunning.Operation][google.longrunning.Operation] API , which
     * allows you to keep track of the export. We recommend intervals of at least
     * 2 seconds with exponential retry to poll the export operation result. For
     * regular-size resource parent, the export operation usually finishes within
     * 5 minutes.
     * @param \Google\Cloud\Asset\V1\ExportAssetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ExportAssets(\Google\Cloud\Asset\V1\ExportAssetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/ExportAssets',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Batch gets the update history of assets that overlap a time window.
     * For IAM_POLICY content, this API outputs history when the asset and its
     * attached IAM POLICY both exist. This can create gaps in the output history.
     * Otherwise, this API outputs history with asset in both non-delete or
     * deleted status.
     * If a specified asset does not exist, this API returns an INVALID_ARGUMENT
     * error.
     * @param \Google\Cloud\Asset\V1\BatchGetAssetsHistoryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BatchGetAssetsHistory(\Google\Cloud\Asset\V1\BatchGetAssetsHistoryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/BatchGetAssetsHistory',
        $argument,
        ['\Google\Cloud\Asset\V1\BatchGetAssetsHistoryResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a feed in a parent project/folder/organization to listen to its
     * asset updates.
     * @param \Google\Cloud\Asset\V1\CreateFeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateFeed(\Google\Cloud\Asset\V1\CreateFeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/CreateFeed',
        $argument,
        ['\Google\Cloud\Asset\V1\Feed', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets details about an asset feed.
     * @param \Google\Cloud\Asset\V1\GetFeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetFeed(\Google\Cloud\Asset\V1\GetFeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/GetFeed',
        $argument,
        ['\Google\Cloud\Asset\V1\Feed', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists all asset feeds in a parent project/folder/organization.
     * @param \Google\Cloud\Asset\V1\ListFeedsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListFeeds(\Google\Cloud\Asset\V1\ListFeedsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/ListFeeds',
        $argument,
        ['\Google\Cloud\Asset\V1\ListFeedsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates an asset feed configuration.
     * @param \Google\Cloud\Asset\V1\UpdateFeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateFeed(\Google\Cloud\Asset\V1\UpdateFeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/UpdateFeed',
        $argument,
        ['\Google\Cloud\Asset\V1\Feed', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes an asset feed.
     * @param \Google\Cloud\Asset\V1\DeleteFeedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteFeed(\Google\Cloud\Asset\V1\DeleteFeedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/DeleteFeed',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches all the resources within the given accessible scope (e.g., a
     * project, a folder or an organization). Callers should have
     * cloud.assets.SearchAllResources permission upon the requested scope,
     * otherwise the request will be rejected.
     * @param \Google\Cloud\Asset\V1\SearchAllResourcesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchAllResources(\Google\Cloud\Asset\V1\SearchAllResourcesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/SearchAllResources',
        $argument,
        ['\Google\Cloud\Asset\V1\SearchAllResourcesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Searches all the IAM policies within the given accessible scope (e.g., a
     * project, a folder or an organization). Callers should have
     * cloud.assets.SearchAllIamPolicies permission upon the requested scope,
     * otherwise the request will be rejected.
     * @param \Google\Cloud\Asset\V1\SearchAllIamPoliciesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function SearchAllIamPolicies(\Google\Cloud\Asset\V1\SearchAllIamPoliciesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.asset.v1.AssetService/SearchAllIamPolicies',
        $argument,
        ['\Google\Cloud\Asset\V1\SearchAllIamPoliciesResponse', 'decode'],
        $metadata, $options);
    }

}
