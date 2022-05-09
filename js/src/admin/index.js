import app from 'duroom/admin/app';
import { extend } from 'duroom/common/extend';

import DashboardPage from 'duroom/admin/components/DashboardPage';

import StatisticsWidget from './components/StatisticsWidget';
import ItemList from 'duroom/common/utils/ItemList';

app.initializers.add('duroom-statistics', () => {
  extend(DashboardPage.prototype, 'availableWidgets', function (widgets: ItemList) {
    widgets.add('statistics', <StatisticsWidget />, 20);
  });
});
