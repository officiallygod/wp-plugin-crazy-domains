import { settings, help, grid, store } from '@wordpress/icons';
import { Route, Routes } from 'react-router-dom';
import { __ } from '@wordpress/i18n';
import Home from '../pages/home';
import Marketplace from '../pages/marketplace';
import Settings from '../pages/settings';
import Performance from '../pages/performance';
import Help from '../pages/help';
import Ecommerce from '../pages/ecommerce';

export const AppRoutes = () => {
	return (
		<Routes>
			{ routes.map( ( page ) => (
				<Route
					end
					key={ page.name }
					path={
						'/marketplace' === page.name
							? '/marketplace/*'
							: page.name
					}
					element={ <page.Component /> }
				/>
			) ) }
			<Route path="/" element={ <Home /> } />
			<Route
				path="*"
				element={
					<main style={ { padding: '1rem' } }>
						<p>
							{ __( "There's nothing here!", 'wp-plugin-crazy-domains' ) }
						</p>
					</main>
				}
			/>
		</Routes>
	);
};

const topRoutePaths = [
	'/home',
	'/marketplace',
	'/performance',
	'/settings',
	'/help',
];
const utilityRoutePaths = [ '/performance', '/settings', '/help' ];

export const routes = [
	{
		name: '/home',
		title: __( 'Home', 'wp-plugin-crazy-domains' ),
		Component: Home,
		Icon: grid,
	},
	{
		name: '/home/store',
		Component: Ecommerce
	},
	{
		name: '/home/store/:section',
		Component: Ecommerce
	},
	{
		name: '/marketplace',
		title: __( 'Marketplace', 'wp-plugin-crazy-domains' ),
		Component: Marketplace,
		Icon: store,
	},
	{
		name: '/performance',
		title: __( 'Performance', 'wp-plugin-crazy-domains' ),
		Component: Performance,
		Dashicon: 'performance',
	},
	{
		name: '/settings',
		title: __( 'Settings', 'wp-plugin-crazy-domains' ),
		Component: Settings,
		Icon: settings,
	},
	{
		name: '/help',
		title: __( 'Help', 'wp-plugin-crazy-domains' ),
		Component: Help,
		Icon: help,
	},
];

export const topRoutes = _filter( routes, ( route ) =>
	topRoutePaths.includes( route.name )
);

export const utilityRoutes = _filter( routes, ( route ) =>
	utilityRoutePaths.includes( route.name )
);

export default AppRoutes;
