---
statblock: true
name: 'Shroud Ray'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Aberration
cr: 8
ac: 13
hp: 97
hit_dice: '13d10 + 26'
speed: '10 ft., swim 50 ft.'
stats:
    - 18
    - 16
    - 14
    - 12
    - 12
    - 12
damage_resistances: bludgeoning
condition_immunities: 'charmed, frightened'
saves:
    - { wisdom: 4 }
skillsaves:
    - { stealth: 6 }
senses: 'darkvision 60 ft., passive Perception 11'
languages: 'Deep Speech, Undercommon'
traits:
    - { name: 'False Appearance', desc: 'When motionless, the ray is indistinguishable from a patch of sand.' }
    - { name: 'Light Sensitivity', desc: 'The cloaker has disadvantage on attack rolls and Perception checks while in bright light.' }
    - { name: Aquatic, desc: 'The shroud ray can only breathe underwater.' }
actions:
    - { name: Bite, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one creature. Hit: 11 (2d6 + 4) piercing damage, and the target is grappled (escape DC 15). If the cloaker has advantage against the target, the cloaker attaches to the target's head, and the target is blinded and suffocating. Until this grapple ends, the cloaker automatically hits the grappled creature with this attack. When the cloaker is dealt damage while grappling, it takes half the damage (rounded down) and the other half is dealt to the grappled target. The cloaker can have only one creature grappled at once." }
    - { name: Tail, desc: "Melee Weapon Attack: +7 to hit, reach 10 ft., one creature. Hit: 7 (1d6 + 4) slashing damage plus 3 (1d6) poison damage, and the creature makes a DC 13 Constitution saving throw. On a failure, it is poisoned until the end of the cloaker's next turn." }
    - { name: Moan, desc: "Each non-aberration creature within 60 feet that can hear its moan makes a DC 13 Wisdom saving throw. On a failure, it is frightened until the end of the cloaker's next turn. When a creature succeeds on this saving throw, it becomes immune to the cloaker's moan for 24 hours." }
    - { name: 'Phantasms (1/Day)', desc: 'The cloaker magically creates flickering illusions of itself in its space. Attacks on it have disadvantage. This effect ends after 1 minute, when the cloaker enters an area of bright light, or when it successfully grapples a creature.' }
reactions:
    - { name: 'Reactive Tail', desc: 'When hit or missed with a melee attack, the cloaker makes a tail attack against the attacker.' }
    - { name: 'Angry Moan', desc: 'When the cloaker takes damage, it uses Moan.' }
combat:
    - { name: 'A cloaker never attacks unless it can do so with surprise', desc: 'It either masquerades as a cloth item or uses Phantasms and lurks in the darkness or overhead. When it attacks, it bites. The first time it is attacked each turn, it uses Reactive Tail or Angry Moan. The cloaker flees if reduced to 20 hit points or fewer, if a creature escapes its grapple, or when in bright light. While fleeing, it uses its reactions to slow pursuit. A cloaker forced to flee often returns to stalk its foes, waiting for an opportune time to strike again.' }

---
```statblock
monster: Shroud Ray
```
