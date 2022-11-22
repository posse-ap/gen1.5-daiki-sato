/* tslint:disable */
/* eslint-disable */
/**
 * Saikan-Shoin API
 * API for Saikan-Shoin.
 *
 * The version of the OpenAPI document: 1.0.0
 *
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

import { Configuration } from './configuration';
import globalAxios, { AxiosPromise, AxiosInstance, AxiosRequestConfig } from 'axios';
// Some imports not used depending on template conditions
// @ts-ignore
import {
  DUMMY_BASE_URL,
  assertParamExists,
  setApiKeyToObject,
  setBasicAuthToObject,
  setBearerAuthToObject,
  setOAuthToObject,
  setSearchParams,
  serializeDataIfNeeded,
  toPathString,
  createRequestFunction,
} from './common';
// @ts-ignore
import { BASE_PATH, COLLECTION_FORMATS, RequestArgs, BaseAPI, RequiredError } from './base';

/**
 *
 * @export
 * @interface MonthStudyingHour
 */
export interface MonthStudyingHour {
  /**
   *
   * @type {number}
   * @memberof MonthStudyingHour
   */
  id: number;
  /**
   *
   * @type {number}
   * @memberof MonthStudyingHour
   */
  month_studying_hour?: number;
}
/**
 *
 * @export
 * @interface TodayStudyingHour
 */
export interface TodayStudyingHour {
  /**
   *
   * @type {number}
   * @memberof TodayStudyingHour
   */
  id: number;
  /**
   *
   * @type {number}
   * @memberof TodayStudyingHour
   */
  today_studying_hour?: number;
}
/**
 *
 * @export
 * @interface TotalStudyingHour
 */
export interface TotalStudyingHour {
  /**
   *
   * @type {number}
   * @memberof TotalStudyingHour
   */
  id: number;
  /**
   *
   * @type {number}
   * @memberof TotalStudyingHour
   */
  total_studying_hour?: number;
}

/**
 * StudyingHourApi - axios parameter creator
 * @export
 */
export const StudyingHourApiAxiosParamCreator = function (configuration?: Configuration) {
  return {
    /**
     * Returns a single Month Studying Hour
     * @summary Get Month Studying Hour by MonthId.
     * @param {number} yearId year id
     * @param {number} monthId month id
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getMonthStudyingHour: async (
      yearId: number,
      monthId: number,
      options: AxiosRequestConfig = {}
    ): Promise<RequestArgs> => {
      // verify required parameter 'yearId' is not null or undefined
      assertParamExists('getMonthStudyingHour', 'yearId', yearId);
      // verify required parameter 'monthId' is not null or undefined
      assertParamExists('getMonthStudyingHour', 'monthId', monthId);
      const localVarPath = `/month-studying-hour/{yearId}/{monthId}`
        .replace(`{${'yearId'}}`, encodeURIComponent(String(yearId)))
        .replace(`{${'monthId'}}`, encodeURIComponent(String(monthId)));
      // use dummy base URL string because the URL constructor only accepts absolute URLs.
      const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
      let baseOptions;
      if (configuration) {
        baseOptions = configuration.baseOptions;
      }

      const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options };
      const localVarHeaderParameter = {} as any;
      const localVarQueryParameter = {} as any;

      setSearchParams(localVarUrlObj, localVarQueryParameter);
      let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
      localVarRequestOptions.headers = {
        ...localVarHeaderParameter,
        ...headersFromBaseOptions,
        ...options.headers,
      };

      return {
        url: toPathString(localVarUrlObj),
        options: localVarRequestOptions,
      };
    },
    /**
     * Returns total studying hour.
     * @summary Get total studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getTotalStudyingHour: async (options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
      const localVarPath = `/total-studying-hours`;
      // use dummy base URL string because the URL constructor only accepts absolute URLs.
      const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
      let baseOptions;
      if (configuration) {
        baseOptions = configuration.baseOptions;
      }

      const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options };
      const localVarHeaderParameter = {} as any;
      const localVarQueryParameter = {} as any;

      setSearchParams(localVarUrlObj, localVarQueryParameter);
      let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
      localVarRequestOptions.headers = {
        ...localVarHeaderParameter,
        ...headersFromBaseOptions,
        ...options.headers,
      };

      return {
        url: toPathString(localVarUrlObj),
        options: localVarRequestOptions,
      };
    },
    /**
     * Returns today studying hour.
     * @summary Get today studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getTotalTodayStudyingHour: async (options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
      const localVarPath = `/today-sftudying-hours`;
      // use dummy base URL string because the URL constructor only accepts absolute URLs.
      const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
      let baseOptions;
      if (configuration) {
        baseOptions = configuration.baseOptions;
      }

      const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options };
      const localVarHeaderParameter = {} as any;
      const localVarQueryParameter = {} as any;

      setSearchParams(localVarUrlObj, localVarQueryParameter);
      let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
      localVarRequestOptions.headers = {
        ...localVarHeaderParameter,
        ...headersFromBaseOptions,
        ...options.headers,
      };

      return {
        url: toPathString(localVarUrlObj),
        options: localVarRequestOptions,
      };
    },
  };
};

/**
 * StudyingHourApi - functional programming interface
 * @export
 */
export const StudyingHourApiFp = function (configuration?: Configuration) {
  const localVarAxiosParamCreator = StudyingHourApiAxiosParamCreator(configuration);
  return {
    /**
     * Returns a single Month Studying Hour
     * @summary Get Month Studying Hour by MonthId.
     * @param {number} yearId year id
     * @param {number} monthId month id
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    async getMonthStudyingHour(
      yearId: number,
      monthId: number,
      options?: AxiosRequestConfig
    ): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<MonthStudyingHour>> {
      const localVarAxiosArgs = await localVarAxiosParamCreator.getMonthStudyingHour(
        yearId,
        monthId,
        options
      );
      return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
    },
    /**
     * Returns total studying hour.
     * @summary Get total studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    async getTotalStudyingHour(
      options?: AxiosRequestConfig
    ): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<TotalStudyingHour>> {
      const localVarAxiosArgs = await localVarAxiosParamCreator.getTotalStudyingHour(options);
      return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
    },
    /**
     * Returns today studying hour.
     * @summary Get today studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    async getTotalTodayStudyingHour(
      options?: AxiosRequestConfig
    ): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<TodayStudyingHour>> {
      const localVarAxiosArgs = await localVarAxiosParamCreator.getTotalTodayStudyingHour(options);
      return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
    },
  };
};

/**
 * StudyingHourApi - factory interface
 * @export
 */
export const StudyingHourApiFactory = function (
  configuration?: Configuration,
  basePath?: string,
  axios?: AxiosInstance
) {
  const localVarFp = StudyingHourApiFp(configuration);
  return {
    /**
     * Returns a single Month Studying Hour
     * @summary Get Month Studying Hour by MonthId.
     * @param {number} yearId year id
     * @param {number} monthId month id
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getMonthStudyingHour(
      yearId: number,
      monthId: number,
      options?: any
    ): AxiosPromise<MonthStudyingHour> {
      return localVarFp
        .getMonthStudyingHour(yearId, monthId, options)
        .then((request) => request(axios, basePath));
    },
    /**
     * Returns total studying hour.
     * @summary Get total studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getTotalStudyingHour(options?: any): AxiosPromise<TotalStudyingHour> {
      return localVarFp.getTotalStudyingHour(options).then((request) => request(axios, basePath));
    },
    /**
     * Returns today studying hour.
     * @summary Get today studying hour.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     */
    getTotalTodayStudyingHour(options?: any): AxiosPromise<TodayStudyingHour> {
      return localVarFp
        .getTotalTodayStudyingHour(options)
        .then((request) => request(axios, basePath));
    },
  };
};

/**
 * StudyingHourApi - object-oriented interface
 * @export
 * @class StudyingHourApi
 * @extends {BaseAPI}
 */
export class StudyingHourApi extends BaseAPI {
  /**
   * Returns a single Month Studying Hour
   * @summary Get Month Studying Hour by MonthId.
   * @param {number} yearId year id
   * @param {number} monthId month id
   * @param {*} [options] Override http request option.
   * @throws {RequiredError}
   * @memberof StudyingHourApi
   */
  public getMonthStudyingHour(yearId: number, monthId: number, options?: AxiosRequestConfig) {
    return StudyingHourApiFp(this.configuration)
      .getMonthStudyingHour(yearId, monthId, options)
      .then((request) => request(this.axios, this.basePath));
  }

  /**
   * Returns total studying hour.
   * @summary Get total studying hour.
   * @param {*} [options] Override http request option.
   * @throws {RequiredError}
   * @memberof StudyingHourApi
   */
  public getTotalStudyingHour(options?: AxiosRequestConfig) {
    return StudyingHourApiFp(this.configuration)
      .getTotalStudyingHour(options)
      .then((request) => request(this.axios, this.basePath));
  }

  /**
   * Returns today studying hour.
   * @summary Get today studying hour.
   * @param {*} [options] Override http request option.
   * @throws {RequiredError}
   * @memberof StudyingHourApi
   */
  public getTotalTodayStudyingHour(options?: AxiosRequestConfig) {
    return StudyingHourApiFp(this.configuration)
      .getTotalTodayStudyingHour(options)
      .then((request) => request(this.axios, this.basePath));
  }
}
