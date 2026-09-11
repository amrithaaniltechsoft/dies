<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Service;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        Product::truncate();
        Service::truncate();

        $products = [
            $this->product(
                'Multi-Cavity Stamping Die Block',
                'multi-cavity-stamping-die-block',
                '/products/p1.jpg',
                'PRECISION DIE MOULD',
                'Heavy-duty hardened steel mould engineered for repetitive high-speed metal stamping cycles.',
                'Designed for high-speed manufacturing environments, this multi-cavity stamping die block is precision-engineered using premium hardened tool steel. It guarantees consistent, burr-free part production across millions of cycles, significantly reducing downtime and maintenance costs.',
                [
                    'Manufactured from high-grade D2/H13 tool steel',
                    'Optimized for high-tonnage mechanical presses',
                    'Exceptional wear resistance and thermal stability',
                    'Sub-micron precision wire EDM cut profiles',
                ],
                null,
                null,
            ),
            $this->product(
                'High-Tolerance Progressive Mould',
                'high-tolerance-progressive-mould',
                '/products/p2.jpg',
                'FORMING MOULD',
                'Multi-stage sequential forming die designed for complex automotive and industrial components.',
                'Our high-tolerance progressive moulds integrate blanking, coining, bending, and forming into a single continuous operation. Engineered specifically for complex automotive brackets and aerospace components, these dies ensure exact dimensional repetition.',
                [
                    'Integrated multi-stage sequential forming',
                    'Built-in sensor integration for fault detection',
                    'Custom spring-loaded stripper plates',
                    'Precision ground pilot pins for exact strip registration',
                ],
                null,
                null,
            ),
            $this->product(
                'Profile Extrusion Die Cavity',
                'profile-extrusion-die-cavity',
                '/products/p3.jpg',
                'EXTRUSION DIE',
                'Custom profile extrusion mould core crafted with sub-micron wire EDM cuts.',
                'Custom-crafted for aluminum and polymer extrusion, this profile die cavity is engineered using advanced computational fluid dynamics (CFD) to ensure balanced material flow. This eliminates warping and ensures a flawless surface finish on the extruded profile.',
                [
                    'Balanced flow channel design',
                    'Highly polished extrusion bearing surfaces',
                    'Thermal-shock resistant construction',
                    'Rapid-change modular die backings',
                ],
                null,
                null,
            ),
            $this->product(
                'Tungsten Carbide Insert Die',
                'tungsten-carbide-insert-die',
                '/products/p4.jpg',
                'CARBIDE TOOLING',
                'Extreme-wear resistant carbide die inserts built for abrasive high-tonnage pressing.',
                'When standard tool steel fails, our tungsten carbide insert dies deliver. Designed for extreme-wear applications involving abrasive materials or massive production runs, these inserts provide up to 10x the operational life of conventional steel dies.',
                [
                    'Solid micro-grain tungsten carbide construction',
                    'Shrink-fitted into hardened steel casings',
                    'Diamond-polished wear surfaces',
                    'Ideal for extreme high-volume production',
                ],
                null,
                null,
            ),
            $this->product(
                'Precision Plastic Injection Mould',
                'precision-plastic-injection-mould',
                '/products/p5.jpg',
                'INJECTION MOULD',
                'Balanced runner system with polished core and cavity surfaces for flawless surface finish.',
                'This high-precision injection mould features advanced conformal cooling channels and a perfectly balanced hot runner system. It guarantees rapid cycle times and absolutely flawless surface finishes for critical consumer and medical plastics.',
                [
                    'Conformal cooling for rapid cycle times',
                    'SPI A-1 diamond polished cavity surfaces',
                    'Balanced hot/cold runner architecture',
                    'Precision ejector pin alignment',
                ],
                null,
                null,
            ),
            $this->product(
                'Deep Drawing Sheet Metal Die',
                'deep-drawing-sheet-metal-die',
                '/products/p6.jpg',
                'DRAWING DIE',
                'Custom radiused draw die set for smooth metal flow without wrinkling or tearing.',
                'Engineered for complex deep drawing operations, this die set ensures smooth, continuous metal flow. By carefully calculating the draw ratio and incorporating precisely radiused edges, we eliminate material wrinkling and tearing.',
                [
                    'Optimized blank holder pressure systems',
                    'Friction-reducing surface coatings (TiN/DLC)',
                    'Engineered draw radii for tear prevention',
                    'High-strength cast iron or steel alloy base',
                ],
                null,
                null,
            ),
            $this->product(
                'Hot Forging Die Block',
                'hot-forging-die-block',
                '/products/p7.jpg',
                'FORGING MOULD',
                'Thermal shock resistant H13 tool steel die for heavy industrial hot forging operations.',
                'Subjected to extreme temperatures and massive impact forces, our hot forging die blocks are forged from premium H13 tool steel. They are heat-treated to exact specifications to resist thermal fatigue, checking, and plastic deformation.',
                [
                    'Premium H13 hot-work tool steel',
                    'Advanced nitrocarburizing surface treatments',
                    'Engineered draft angles for easy part release',
                    'Resistant to severe thermal shock',
                ],
                null,
                null,
            ),
            $this->product(
                'Compound Blanking & Piercing Die',
                'compound-blanking-piercing-die',
                '/products/p8.jpg',
                'BLANKING DIE',
                'Simultaneous blanking and hole punching die for precision sheet metal brackets.',
                'This compound die executes blanking and piercing in a single press stroke, ensuring perfect concentricity between the outer profile and internal holes. It\'s the ideal solution for high-accuracy washers, gears, and flat brackets.',
                [
                    'Single-stroke simultaneous operation',
                    'Guarantees absolute hole-to-edge concentricity',
                    'Spring-loaded knockout mechanisms',
                    'Precision guided die pillars',
                ],
                null,
                null,
            ),
            $this->product(
                'Hardened Punch & Die Assembly',
                'hardened-punch-die-assembly',
                '/products/p9.jpg',
                'PUNCH TOOLING',
                'Precision ground punch pins and matching die bushings for extended production life.',
                'Our punch and die assemblies provide the critical cutting clearance required for clean, burr-free holes. Manufactured with precision ground punch pins and perfectly matched die buttons, they ensure extremely tight tolerances over millions of hits.',
                [
                    'M2 or powdered metal (PM) punch pins',
                    'Exact cutting clearance calculations',
                    'Quick-change retainer systems',
                    'High-impact resistance',
                ],
                null,
                null,
            ),
            $this->product(
                'Metrology Inspection Fixture',
                'metrology-inspection-fixture',
                '/products/p10.jpg',
                'GAUGE & FIXTURE',
                'Custom checking gauge designed for rapid CMM verification of manufactured dies.',
                'Quality begins with accurate measurement. Our custom metrology inspection fixtures hold complex parts in precise orientation, allowing for rapid and repeatable CMM (Coordinate Measuring Machine) probing or visual Go/No-Go verification.',
                [
                    'Aircraft-grade aluminum or steel construction',
                    'Precision ground resting pads',
                    'Integrated toggle clamps for secure holding',
                    'CMM and laser-scanner compatible',
                ],
                null,
                null,
            ),
            $this->product(
                'Custom Form Mould Core',
                'custom-form-mould-core',
                '/products/p11.jpg',
                'SPECIALTY MOULD',
                'Tailored industrial mould core produced according to exact client CAD specifications.',
                'When standard geometries don\'t apply, our specialty mould cores are custom-machined directly from client CAD data. Utilizing 5-axis CNC machining, we can produce highly complex organic shapes and undercuts for specialized industries.',
                [
                    'Direct CAD-to-CAM 5-axis machining',
                    'Complex organic geometry support',
                    'High-precision 3D surfacing',
                    'Custom venting and ejector configurations',
                ],
                null,
                null,
            ),
            $this->product(
                'Precision Tool Assembly Component',
                'precision-tool-assembly-component',
                '/products/p1.jpg',
                'ASSEMBLY TOOLING',
                'Custom fitted die tooling component with micro-finished surfaces for tight tolerances.',
                'The backbone of any complex die set, our precision tool assembly components are ground to sub-micron tolerances. These components ensure that multi-stage dies align perfectly during every single press stroke, preventing catastrophic tooling crashes.',
                [
                    'Sub-micron precision grinding',
                    'Optical comparator verified geometries',
                    'Matched sets for perfect alignment',
                    'Stress-relieved material bases',
                ],
                null,
                null,
            ),
        ];

        Product::insert($products);

        $services = [
            $this->service(
                'Custom Die & Mold Manufacturing',
                'custom-die-manufacturing',
                '/products/p1.jpg',
                'PRECISION DIE MAKING',
                'End-to-end design and precision fabrication of heavy-duty progressive, stamping, and extrusion dies.',
                'Our custom die manufacturing service delivers high-grade tool steel and carbide dies tailored for high-volume, high-precision industrial production. Leveraging 5-axis CNC machining, wire EDM cutting, and rigorous heat treatment protocols, we engineer custom dies built for extreme durability and zero-defect output.',
                [
                    '5-Axis CNC & Sub-Micron Wire EDM Fabrication',
                    'High-grade D2, H13, and Tungsten Carbide material selection',
                    'Integrated multi-cavity and progressive die designs',
                    'Strict quality control with full CMM inspection reports',
                ],
                [
                    'Extends operational die life up to 5x over standard tooling',
                    'Reduces production cycle times and material scrap',
                    'Ensures exact component repeatability across millions of strokes',
                ],
                [
                    ['q' => 'What materials do you use for custom die making?', 'a' => 'We primary work with premium hardened tool steels such as D2, H13, S7, M2, as well as tungsten carbide inserts for high-wear areas.'],
                    ['q' => 'What is your typical production lead time?', 'a' => 'Lead times range from 2 to 4 weeks depending on die complexity, CAD specifications, and heat treatment cycles.'],
                ],
            ),
            $this->service(
                'Tooling & Mold Design Engineering',
                'tooling-and-mold-design',
                '/products/p2.jpg',
                'CAD / CAM ENGINEERING',
                'Advanced 3D CAD modeling, flow simulation, and stress analysis for flawless tool design.',
                'We transform technical product requirements into robust, high-performance mold and tool designs. Our engineering team utilizes state-of-the-art CAD/CAM software and finite element analysis (FEA) to optimize mold cooling, material flow, stress distribution, and ejection mechanisms prior to manufacturing.',
                [
                    '3D Parametric CAD/CAM mold geometry creation',
                    'Computational Fluid Dynamics (CFD) & thermal flow analysis',
                    'Conformal cooling channel optimization',
                    'DFM (Design for Manufacturability) feasibility reports',
                ],
                [
                    'Eliminates costly tooling rework before physical production',
                    'Optimizes cycle times through superior thermal management',
                    'Ensures seamless integration with press automation',
                ],
                [
                    ['q' => 'Can you work from our existing CAD drawings?', 'a' => 'Yes, we accept all standard CAD formats including STEP, IGES, SolidWorks, AutoCAD, and DXF files.'],
                ],
            ),
            $this->service(
                'Custom Metal Working & Precision Machining',
                'cnc-precision-machining',
                '/products/p3.jpg',
                'HIGH SPEED MACHINING',
                'High-speed CNC milling, turning, and grinding with sub-micron dimensional accuracy.',
                'Our precision machining facility handles complex metal working requirements for custom industrial components, die blocks, and tool inserts. Utilizing multi-axis CNC machines and precision surface grinders, we achieve sub-micron tolerances and mirror-like surface finishes.',
                [
                    'Multi-Axis High-Speed CNC Milling & Turning',
                    'Sub-micron precision surface grinding and honing',
                    'Tight-tolerance machining (+/- 0.002 mm)',
                    'Specialty alloy machining (Titanium, Inconel, Hardened Steels)',
                ],
                [
                    'Superior surface finish quality (SPI A-1 diamond polish)',
                    'High accuracy for critical aerospace and automotive components',
                    'Rapid turnaround for both single units and production batches',
                ],
                [],
            ),
            $this->service(
                'Component Prototyping & Pilot Batches',
                'rapid-component-prototyping',
                '/products/p4.jpg',
                'RAPID PROTOTYPING',
                'Fast turn prototype fabrication to validate engineering designs before mass production.',
                'Accelerate your product development cycle with our rapid component prototyping service. We quickly translate technical concepts into physical, fully functional metal and alloy components for fit-testing, stress validation, and pre-production approval.',
                [
                    'Rapid CNC prototyping within 3-5 business days',
                    'Short-run pilot production (1 to 50 units)',
                    'Comprehensive CMM dimensional validation',
                    'Functional metal sample testing',
                ],
                [
                    'Mitigates mass production risks through early testing',
                    'Allows rapid design iterations and design refinements',
                    'Saves cost by catching tolerance errors early',
                ],
                [],
            ),
            $this->service(
                'Die Maintenance, Sharpening & Repair',
                'tooling-recondition-and-repair',
                '/products/p5.jpg',
                'TOOL MAINTENANCE',
                'Complete die refurbishment, laser welding, surface recoating, and precision sharpening.',
                'Maximize the lifespan of your production dies with our professional maintenance and reconditioning services. We offer precision punch sharpening, laser clutter welding for damaged core surfaces, alignment checks, and wear-resistant PVD coating applications.',
                [
                    'Laser micro-welding for cavity surface restoration',
                    'Precision punch and die button resharpening',
                    'Guide pin & bushing replacement and alignment',
                    'TiN, CrN, and DLC surface recoating',
                ],
                [
                    'Restores worn tools to original factory tolerances',
                    'Significantly cheaper than purchasing brand new die sets',
                    'Minimizes factory downtime with fast emergency repair turnaround',
                ],
                [],
            ),
            $this->service(
                'Metrology & Quality Inspection Services',
                'inspection-and-quality-assurance',
                '/products/p6.jpg',
                'QUALITY METROLOGY',
                'CMM probing, laser scanning, and Go/No-Go fixture checking for complete quality verification.',
                'We provide comprehensive quality assurance and reverse engineering inspection services using state-of-the-art Coordinate Measuring Machines (CMM) and optical 3D scanners. Every manufactured component is backed by certified metrology reports.',
                [
                    'Automated CMM 3D coordinate measurement',
                    'Non-contact optical and laser 3D scanning',
                    'Custom Go/No-Go inspection fixture design',
                    'First Article Inspection Reports (FAIR)',
                ],
                [
                    'Complete transparency and compliance documentation',
                    'Verifies complex 3D surface contours against CAD models',
                    'Ensures zero defects in delivered tooling',
                ],
                [],
            ),
            $this->service(
                'Wire EDM & Sinker Cutting Services',
                'wire-edm-and-sinker-cutting',
                '/products/p7.jpg',
                'PRECISION EDM',
                'Sub-micron electrical discharge machining for tight-tolerance die pockets and hard alloy profiles.',
                'Our high-precision Wire EDM and Sinker EDM cutting services allow for intricate internal contours and sharp inside corners in hardened tool steels and tungsten carbide. Ideal for punch inserts, die button cavities, and delicate profile keyways.',
                [
                    'Sub-micron Wire EDM cut accuracy (+/- 0.001 mm)',
                    'High-precision CNC Sinker EDM with graphite and copper electrodes',
                    'Deep cavity spark erosion for conductive alloys',
                    'Micro-hole drilling for starter EDM holes',
                ],
                [
                    'Machining without mechanical stress or thermal distortion',
                    'Produces micro-fine surface finishes directly on hardened steel',
                    'Capable of cutting extreme hard alloys up to 70 HRC',
                ],
                [],
            ),
            $this->service(
                'Heat Treatment & Advanced Surface Coating',
                'heat-treatment-and-surface-coating',
                '/products/p8.jpg',
                'THERMAL TREATING',
                'Controlled vacuum heat treatment, stress relieving, and hard PVD/DLC protective surface coatings.',
                'We offer complete thermal processing and surface engineering to optimize the wear resistance and toughness of custom dies. Services include vacuum hardening, cryo-treating, tempering, and thin-film PVD coatings such as TiN, CrN, and DLC.',
                [
                    'Computerized vacuum heat treatment furnace processing',
                    'Sub-zero cryogenic treatment for microstructural stability',
                    'Physical Vapor Deposition (PVD) TiN / TiAlN coatings',
                    'Plasma nitriding and surface case hardening',
                ],
                [
                    'Drastically reduces surface friction and galling in metal forming',
                    'Improves core toughness to withstand high-impact stamping cycles',
                    'Prevents premature tool checking and thermal fatigue',
                ],
                [],
            ),
        ];

        Service::insert($services);
    }

    private function product(
        string $name,
        string $slug,
        string $image,
        string $tag,
        string $description,
        string $fullDesc,
        array $features,
        ?array $benefits,
        ?array $faqs,
    ): array {
        return [
            'name' => $name,
            'slug' => $slug,
            'image' => $image,
            'tag' => $tag,
            'description' => $description,
            'full_desc' => $fullDesc,
            'features' => json_encode($features),
            'benefits' => $benefits ? json_encode($benefits) : null,
            'faqs' => $faqs ? json_encode($faqs) : null,
            'price' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    private function service(
        string $name,
        string $slug,
        string $image,
        string $tag,
        string $description,
        string $fullDesc,
        array $features,
        array $benefits,
        array $faqs,
    ): array {
        return [
            'name' => $name,
            'slug' => $slug,
            'image' => $image,
            'tag' => $tag,
            'description' => $description,
            'full_desc' => $fullDesc,
            'features' => json_encode($features),
            'benefits' => json_encode($benefits),
            'faqs' => json_encode($faqs),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}