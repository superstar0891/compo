# -*- coding: utf-8 -*-

# PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
# https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

from ccxt.async_support.okex import okex


class okex5(okex):

    def describe(self):
        return self.deep_extend(super(okex5, self).describe(), {
            'id': 'okex5',
        })
